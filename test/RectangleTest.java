/*
Készítette: Fésű Gábor, Vásárhelyi Ágoston, Baráth Máté
*/
import static org.junit.jupiter.api.Assertions.assertEquals;
import org.junit.jupiter.api.*;

public class RectangleTest{
    Rectangle rectangle;

    @BeforeEach
    void setUp(){
        rectangle = new Rectangle();
    }

    @Test
    void calcCircleTest(){
        double sideA = 10;
        double sideB = 10;
        double expectedArea = 100.0;
        double expectedDistrict = 40.0;

        double actualArea = this.rectangle.calcArea(sideA, sideB);
        double actualDistrict = this.rectangle.calcDistrict(sideA, sideB);

        assertEquals(expectedArea, actualArea);
        assertEquals(expectedDistrict, actualDistrict);
    }

    @Test
    void calcCircleTestTwo(){
        double sideA = 5.5;
        double sideB = 10;
        double expectedArea = 55.0;
        double expectedDistrict = 31.0;

        double actualArea = this.rectangle.calcArea(sideA, sideB);
        double actualDistrict = this.rectangle.calcDistrict(sideA, sideB);

        assertEquals(expectedArea, actualArea);
        assertEquals(expectedDistrict, actualDistrict);
    }
}