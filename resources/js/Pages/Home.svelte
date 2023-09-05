<script>
    export let title;
    import { page, Link } from '@inertiajs/svelte';
</script>

<div class="flex flex-col items-center text-center space-y-4">
    <h1 class="block mt-4 font-bold text-4xl">{title}</h1>

    {#if $page.url === '/about'}
        <Link href="/" preserveScroll>Home</Link>
    {:else}
        <Link href="/about" preserveScroll>About</Link>
    {/if}

    <br>

    <Link class="btn btn-primary mt-3" href="/users">CRUD Users</Link>
</div>
