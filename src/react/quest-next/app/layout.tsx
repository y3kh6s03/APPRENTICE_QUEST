import { Metadata } from "next";
import Link from "next/link";
import { Inter } from "next/font/google";

import "./features/home/home.css"
import "./globals.css";

const inter = Inter({ subsets: ["latin"] });

export const metadata: Metadata = {
  title: {
    template: '%s | Example',
  },
}

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="ja">
      <body>
        <header>
          <nav>
            <Link href="/">Home</Link>
            <Link href="/blog">Blog</Link>
            <Link href="/weather">weather</Link>
          </nav>
        </header>
        <main>
          {children}
        </main>
        <footer>
          <p>© 2024 My Portfolio</p>
        </footer>
      </body>

    </html>
  );
}
