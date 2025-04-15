import java.awt.GridBagConstraints;
import java.awt.GridBagLayout;

import javax.swing.*;

/**
 * The application main class 
 * @author (Raphael M. Tolentino)
 * @version (version 0.1)
 */

public class Main 
{
    private JFrame makeFrame;
    private JLabel score,board,status;
    GridBagConstraints layout = new GridBagConstraints();

    public Main() {

        makeFrame = new JFrame();

    }

    /**
     * This method sets the JFrame Apperance
     */

    public void frameApperance() 
    {
        makeFrame.setSize(1000,1000);
        makeFrame.setVisible(true);
        makeFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }

    /** 
     * This method creates the JPanels
     */

    public void Panels() 
    {
      setLayout(new GridBagLayout());
      
      score = new JLabel("Hi");
      layout.gridx = 0;
      makeFrame.add(score);
      
      board = new JLabel("He");
      makeFrame.add(board);
      
      status = new JLabel("Ho");
      makeFrame.add(status);
      
      
        
        
        
        
}
    
}