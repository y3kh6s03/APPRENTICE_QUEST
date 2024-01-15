
export const metadata = {
  title: 'todo アプリ',
  description: 'Apprentice QUEST',
}

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <body>{children}</body>
    </html>
  )
}
