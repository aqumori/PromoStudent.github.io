const staticCacheName = 'CacheSpace1';
const assetUrls = [
  '/icons',
  '/css/style.css',
  '/background',
  '/index.html',
];

self.addEventListener('install', event => {
  event.waitUntil(
    (async () => {
      const cache = await caches.open(staticCacheName);
      for (const url of assetUrls) {
        try {
          const fullUrl = new URL(url, location.origin).href;
          await cache.add(fullUrl);
          console.log(Cached asset: ${fullUrl}); 
        } catch (error) {
          console.error(Failed to cache asset: ${fullUrl}, error);
          throw error; 
        }
      }
    })()
  );
});

self.addEventListener('activate', event => {
  console.log('[SW]: activate');
});

self.addEventListener('fetch', event => {
  console.log('Fetch', event.request.url);
  event.respondWith(cacheFirst(event.request));
});

async function cacheFirst(request) {
  const cache = await caches.open(staticCacheName);
  const cached = await cache.match(request);
  return cached ?? await fetch(request);
}
