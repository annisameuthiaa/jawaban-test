#include <iostream>
using namespace std;
int main()
{
    int i, j, baris;
    cout << "Masukkan jumlah baris: ";
    cin >> baris;

    for (i = 0; i < baris; i++)
    {
        for (j = 0; j < (2 * baris); j++)
        {
            if (i >= j)
                cout << "1";
            else
                cout << " ";
            if (i >= (2 * baris - 1) - j)
                cout << "2";
            else
                cout << " ";
        }
        cout << "\n";
    }
      for (i = 0; i < baris; i++)
    {
        for (j = 0; j < (2 * baris); j++)
        {
            if (i + j <= baris - 1)
                cout << "3";
            else
                cout << " ";
            if ((i + baris) <= j)
                cout << "4";
            else
                cout << " ";
        }
        cout << "\n";
    }
    return 0;
}