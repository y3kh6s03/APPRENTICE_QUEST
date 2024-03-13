import BlogIndex from "../features/blog/Blogindex";

import { Metadata } from 'next'

export const metadata: Metadata = {
  title: 'Blog',
}

export default function Blog() {
  return (
    <>
      <BlogIndex />
    </>
  );
}