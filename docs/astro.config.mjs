import { defineConfig } from 'astro/config';
import starlight from '@astrojs/starlight';
import northwesternTheme from "@nu-appdev/northwestern-starlight-theme";

// https://astro.build/config
export default defineConfig({
  site: "https://nit-administrative-systems.github.io/northwestern-laravel-ui/",
  base: "/northwestern-laravel-ui/",
  integrations: [
    starlight({
      plugins: [northwesternTheme()],
      title: "Northwestern Bootstrap Preset for Laravel",
      editLink: {
        baseUrl: "https://github.com/NIT-Administrative-Systems/northwestern-laravel-ui/edit/develop/docs/",
      },
      sidebar: [
        {
          label: "Getting Started",
          link: '/'
        },
        {
          label: "Using the Layouts",
          link: '/usage'
        }
      ],
      social: [
        {
          icon: "github",
          label: "GitHub",
          href: "https://github.com/NIT-Administrative-Systems/northwestern-laravel-ui/",
        },
      ],
    }),
  ]
});