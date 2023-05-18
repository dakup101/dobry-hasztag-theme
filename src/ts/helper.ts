// Defs

export const ajaxUrl = "/wp-admin/admin-ajax.php";

// YouTube API

export const googleApiKey = process.env.GOOGLE_API_KEY;
export const ytUsername = process.env.YOUTUBE_USERNAME;
export const ytChannelID = process.env.YOUTUBE_CHANNEL_ID;
export const ytEndpoint = process.env.YOUTUBE_ENDPOINT;

// Embed links structures

export const ytEmbedBase = "https://www.youtube.com/embed/";

// Types

export type YouTubeVideo = {
	id: string;
	title: string;
	description: string;
	thumbnail: string;
	publishDate: string;
	authorProfilePage: string;
	channelLink: string;
	channelTitle: string;
};

export type fetchTemplate = {
	button: HTMLButtonElement;
	thumbnail: HTMLImageElement;
	userUrl: HTMLAnchorElement;
	userName: HTMLElement;
	date: HTMLElement;
	icon: HTMLElement;
};

// Icons

export const ytIcon =
	'<?xml version="1.0" encoding="utf-8"?><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>';
