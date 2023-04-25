<x-layout>
    <h1>New Project</h1>
    <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'choose' }">
        <div class="flex flex-col w-64 gap-2 mb-10">
            <button @click.prevent="tab = 'public-repo'; window.location.hash = 'public-repo'">Public Repository
            </button>
            <button @click.prevent="tab = 'github-private-repo'; window.location.hash = 'github-private-repo'">Private
                Repository (GitHub App)</button>
            <button @click.prevent="tab = 'empty-project'; window.location.hash = 'empty-project'">Empty
                Project</button>
        </div>

        <div x-cloak x-show="tab === 'public-repo'">
            <livewire:project.new.public-git-repository />
        </div>
        <div x-cloak x-show="tab === 'github-private-repo'">
            github-private-repo
        </div>
        <div x-cloak x-show="tab === 'empty-project'">
            empty-project
        </div>
        <div x-cloak x-show="tab === 'choose'">
            Choose any option
        </div>
    </div>
</x-layout>