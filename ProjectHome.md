BALAH stands for Bookmarkable Ajax Links And HTTP, it  is a new technique that enable asynchronous contents to be indexable and navigable -- this includes Back and Forward support for ajax actions -- in any browser with or without JavaScript.
The sjax content also became easy to index in search engines!

BALAH means to turn synchronous links to asynchronous hashes on-the-fly, the state of the page is saved in window.location.hash. To manipulate and navigate through the States of the page we Use HashListener 2.0 which is part of this project.

BALAH is very simple and straight approach, based in the following:
  * Server side script to build synchronous links, _content is synchronous_
  * Client side script to turn synchronous links into asynchronous. _content became asynchronous_
    * HashListener 2.0 make asynchronous content navigable in different browsers

Every thing can be adapted to fit existent frameworks and add uninterrupted AJAX support. you can try a demo on
- http://3den.org/balah (demo build with php and jquery)

There is little documentation about this project, new contributor are welcome to join.