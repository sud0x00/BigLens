import Navbar from './components/navbar/Navbar';
import Main from './components/main/Main';


function App() {
  window.addEventListener('mousemove', function (e) {
    var bg = document.getElementById('bg-move');
    var bgX = e.clientX;
    var bgY = e.clientY;

    bg.style.backgroundPositionX = bgX * 0.02 + '%';
    bg.style.backgroundPositionY = bgY * 0.02 + '%';
  });
  return (
    <>
      <Navbar />

      <section className='bg-move' id='bg-move'>
        <Main />
      </section>
    </>
  );
}

export default App;
