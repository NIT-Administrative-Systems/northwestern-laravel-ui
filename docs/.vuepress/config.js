module.exports = {
    base: '/northwestern-laravel-ui/',
    title: 'Northwestern Bootstrap Preset for Laravel',
    description: 'Adds a Northwestern Bootstrap theme into your Laravel application.',
    dest: '.build',

    themeConfig: {
        repo: 'NIT-Administrative-Systems/northwestern-laravel-ui',
        docsDir: 'docs',
        docsBranch: 'develop',
        editLinks: true,
        editLinkText: 'Edit Page',
        lastUpdated: true,

        sidebar: [
            ['/', 'Getting Started'],
            'usage',
        ],
    },
}