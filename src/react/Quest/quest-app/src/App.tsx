import Cat from './Card/Cat';
import Card from './Card/Card';

function App() {

  const size = {
    width: '300px',
    height: '300px',
  }

  return (
    <>
      <Card title='Cute Cat'>
        <Cat/>
      </Card>
    </>
  );
}

export default App;
