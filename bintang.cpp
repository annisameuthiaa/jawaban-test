#include <iostream>

using namespace std;


main(){
    int a,b, bintang;
    cout<<"Masukkan jumlah bintang : ";cin>>bintang;

    for (a=4; a<=bintang; a++){
        for (b=1; b<=a; b++){
            cout<<"*";
        }
        cout<<endl;
    }
}