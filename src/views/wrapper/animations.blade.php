<style>
  /* Master fade keyframes */
  @keyframes ska-fade-animation {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }


  /* Animations */
  @if($s_animations == "fadeup")
    @keyframes ska-animation {
      0% {
        position: relative;
        bottom: -50px;
        opacity: 0;
      }
      100% {
        position: relative;
        bottom: 0px;
        opacity: 1;
      }
    }
  @elseif($s_animations == "zoomout")
    @keyframes ska-animation {
      0% { opacity: 0; scale: 1.1 }
      100% { opacity: 1; scale: 1 }
    }
  @elseif($s_animations == "fadein")
    @keyframes ska-animation {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }
  @elseif($s_animations == "disabled")
    @keyframes ska-animation {}

    .Fade__Container-sc-1p0gm8n-0.hcgQjy:has(section) {
      animation-name: ska-fade-animation;
      animation-duration: .4s;
      animation-fill-mode: forwards;
      opacity: 0;
    }

    div.PageContentBlock___StyledContentContainer-sc-kbxq2g-0 > div.bg-gray-700 > div.grid.border-gray-800,
    div.BackupRow___StyledGreyRowBox-sc-1lzi0pw-0,
    .GreyRowBox-sc-1xo9c6v-0,
    .ska-animation,
    .style-module_1WqkLT9X,
    .ScheduleTaskRow___StyledDiv-sc-17r38ls-0 {
      opacity: 1 !important;
      animation: unset !important;
    }
  @endif


  /* Prefers reduced motion */
  @media (prefers-reduced-motion) {
    @keyframes ska-animation {
      0% {opacity: 1}
      100 {opacity: 1}
    }

    .Fade__Container-sc-1p0gm8n-0.hcgQjy:has(section),
    div.PageContentBlock___StyledContentContainer-sc-kbxq2g-0 > div.bg-gray-700 > div.grid.border-gray-800,
    div.BackupRow___StyledGreyRowBox-sc-1lzi0pw-0,
    .GreyRowBox-sc-1xo9c6v-0,
    .ska-animation,
    .style-module_1WqkLT9X,
    .ScheduleTaskRow___StyledDiv-sc-17r38ls-0 {
      animation: unset !important;
      opacity: 1 !important;
    }
  }
</style>