import Home from "./features/home/Home";

import { Metadata } from 'next'

export const metadata: Metadata = {
  title: 'Home',
}

export default function Index() {
  return (
    <>
      <Home />
    </>
  );
}
