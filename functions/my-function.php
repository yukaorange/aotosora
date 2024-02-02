<?php
// 各ページタイトル表示
function my_page_title()
{
  global $post;
  $page_slug = $post->post_name;
  switch ($page_slug) {
    case "introduction":
      return "Introduction";
    case "gallery":
      return "Gallery";
    case "profile";
      return "Profile";
    case "connection";
      return "Connection";
    case "concept";
      return "Concept";
    case "recruit";
      return "Recruit";
    case "flow";
      return "Flow";
    default:
      return $page_slug;
  }
}

function my_page_mainview()
{
  global $post;
  $page_slug = $post->post_name;
  switch ($page_slug) {
    case "introduction":
      return "introduction/introduction-mv.webp";
    case "gallery":
      return "gallery/gallery-mv.webp";
    case "profile":
      return "profile/profile-mv.webp";
    case "connection";
      return "connection/connection-mv.webp";
    case "concept";
      return "concept/concept-mv.webp";
    case "recruit";
      return "recruit/recruit-mv.webp";
    case "yamabiko";
      return "yamabiko/yamabiko-mv.webp";
    case "nurserypuuapuu";
      return "nurserypuuapuu/nurserypuuapuu-mv.webp";
    case "nurserypuuapuuetela";
      return "nurserypuuapuuetela/nurserypuuapuuetela-mv.webp";
    case "morinosanpomiti";
      return "morinosanpomiti/morinosanpomiti-mv.webp";
    case "tesunoki";
      return "tesunoki/tesunoki-mv.webp";
    case "nurseryrope";
      return "nurseryrope/nurseryrope-mv.webp";
    case "flow";
      return "flow/flow-mv.webp";
    default:
      return "introduction/introduction-mv.webp";
  }
}


function my_page_mainview_sp()
{
  global $post;
  $page_slug = $post->post_name;
  switch ($page_slug) {
    case "introduction":
      return "introduction/introduction-mv-sp.webp";
    case "gallery":
      return "gallery/gallery-mv-sp.webp";
    case "profile":
      return "profile/profile-mv-sp.webp";
    case "connection";
      return "connection/connection-mv-sp.webp";
    case "concept";
      return "concept/concept-mv-sp.webp";
    case "recruit";
      return "recruit/recruit-mv-sp.webp";
    case "yamabiko";
      return "yamabiko/yamabiko-mv-sp.webp";
    case "nurserypuuapuu";
      return "nurserypuuapuu/nurserypuuapuu-mv-sp.webp";
    case "nurserypuuapuuetela";
      return "nurserypuuapuuetela/nurserypuuapuuetela-mv-sp.webp";
    case "morinosanpomiti";
      return "morinosanpomiti/morinosanpomiti-mv-sp.webp";
    case "tesunoki";
      return "tesunoki/tesunoki-mv-sp.webp";
    case "nurseryrope";
      return "nurseryrope/nurseryrope-mv-sp.webp";
    case "flow";
      return "flow/flow-mv.webp";
    default:
      return "introduction/introduction-mv-sp.webp";
  }
}
