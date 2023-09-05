<script>
    import { useForm } from "@inertiajs/svelte";
    export let user;

    let form = useForm({
        name: user.name,
        email: user.email,
        password: null,
    });

    function submit() {
        $form.put("/users/" + user.id);
    }
</script>

<div class="container py-5">
    <h1 class="text-center">CRUD Users</h1>
    <form on:submit|preventDefault={submit}>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>

            <input
                bind:value={$form.name}
                id="name"
                type="text"
                placeholder="John Doe"
                class={"form-control" + ($form.errors.name ? " is-invalid" : "")}
            />

            {#if $form.errors.name}
                <div class="invalid-feedback">
                    {$form.errors.name}
                </div>
            {/if}
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>

            <input
                bind:value={$form.email}
                id="email"
                type="email"
                placeholder="name@example.com"
                class={"form-control" + ($form.errors.email ? " is-invalid" : "")}
            />

            {#if $form.errors.email}
                <div class="invalid-feedback">
                    {$form.errors.email}
                </div>
            {/if}
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>

            <input
                bind:value={$form.password}
                id="password"
                type="password"
                class={"form-control" + ($form.errors.password ? " is-invalid" : "")}
            />

            {#if $form.errors.password}
                <div class="invalid-feedback">
                    {$form.errors.password}
                </div>
            {/if}
        </div>

        <button class="btn btn-primary" disabled={$form.processing}>Submit</button>
    </form>
</div>
