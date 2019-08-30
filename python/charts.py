# Basic plot
import numpy as np
import matplotlib.pyplot as plt

height = [3, 12, 5, 18, 45]
bars = ('A', 'B', 'C', 'D', 'E')
y_pos = np.arange(len(bars))
plt.bar(y_pos, height, color=(0.2, 0.4, 0.6, 0.6))

# Custom Axis title
plt.xlabel('Jribo mango', fontweight='bold', color='orange', fontsize='17', horizontalalignment='center')
plt.show()
'''
x=[1,2,3,4,5,6,7,8]
y=[0.1,0.2,0.5,0.6,0.8,0.8,0.8,0.9,1.3]
plt.plot(x,y)
plt.show()
'''