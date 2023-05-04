import { googleApiKey, ytChannelID, ytEndpoint, YouTubeVideo } from "../helper";

export default async function fetchYouTubeVids() {
	const ytQuery = `${ytEndpoint}?channelId=${ytChannelID}&part=snippet,id&order=date&maxResults=6&key=${googleApiKey}`;
	let response = await fetch(ytQuery)
		.then((response) => response.json())
		.then((data) => {
			const videos = data.items.map((item) => {
				return {
					id: item.id.videoId,
					title: item.snippet.title,
					description: item.snippet.description,
					thumbnail: item.snippet.thumbnails.medium.url,
					publishDate: item.snippet.publishedAt,
					authorProfilePage: `https://www.youtube.com/user/${item.snippet.channelTitle}`,
					channelLink: `https://www.youtube.com/channel/${item.snippet.channelId}`,
					channelTitle: item.snippet.channelTitle,
				} as YouTubeVideo;
			});
			return videos;
		})
		.catch((error) => console.error(error));
	return response;
}
