<script>
    import { Link } from "@inertiajs/svelte";
    export let session;

    export let users;
</script>

<div class="container py-5">
    <h1 class="text-center">CRUD Users</h1>

    {#if session.success}
        <div class="alert alert-success" role="alert">
            {session.success}
        </div>
    {/if}

    <Link class="btn btn-primary mb-3" href="/users/create">Create User</Link>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            {#each users as user, i}
                <tr>
                    <th scope="row">{i + 1}</th>
                    <td>{user.name}</td>
                    <td>{user.email}</td>
                    <td>
                        <Link
                            class="btn btn-primary btn-sm"
                            href={"/users/" + user.id + "/edit"}
                        >
                            Edit</Link
                        >
                        <Link
                            as="button"
                            class="btn btn-danger btn-sm"
                            href={"/users/" + user.id}
                            method="delete"
                        >
                            Delete</Link
                        >
                    </td>
                </tr>
            {/each}
        </tbody>
    </table>
</div>
