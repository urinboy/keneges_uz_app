// ignore_for_file: prefer_const_constructors

import 'package:fluentui_icons/fluentui_icons.dart';
import 'package:flutter/material.dart';

class MyHomePage extends StatelessWidget {
  const MyHomePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'Keneges.uz',
          style: TextStyle(
            fontSize: 24,
            fontWeight: FontWeight.bold,
          ),
        ),
        centerTitle: true,
        toolbarHeight: 80,
      ),
      body: Center(
        child: Text('Dastruga xush kelibsiz!'),
      ),
      bottomNavigationBar: BottomNavigationBar(
        elevation: 10,
        showSelectedLabels: false,
        showUnselectedLabels: false,
        selectedItemColor: const Color.fromARGB(255, 9, 152, 223),
        unselectedItemColor: Color.fromARGB(255, 15, 79, 184),
        items: const [
          BottomNavigationBarItem(
              icon: Icon(FluentSystemIcons.ic_fluent_home_regular),
              activeIcon: Icon(FluentSystemIcons.ic_fluent_home_filled),
              label: "Asosiy"),
          BottomNavigationBarItem(
              icon: Icon(FluentSystemIcons.ic_fluent_list_regular),
              activeIcon: Icon(FluentSystemIcons.ic_fluent_list_filled),
              label: "Xizmatlar"),
          BottomNavigationBarItem(
              icon: Icon(FluentSystemIcons.ic_fluent_star_regular),
              activeIcon: Icon(FluentSystemIcons.ic_fluent_star_filled),
              label: "Yangiliklar"),
          BottomNavigationBarItem(
              icon: Icon(FluentSystemIcons.ic_fluent_person_regular),
              activeIcon: Icon(FluentSystemIcons.ic_fluent_person_filled),
              label: "Profil"),
        ],
      ),
    );
  }
}
