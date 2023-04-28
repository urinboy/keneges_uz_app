import 'package:flutter/material.dart';
import 'package:Keneges/src/utils/theme/widget_themes/text_theme.dart';

class UAppTheme {
  UAppTheme._();
  //Mavzular uchun
  static ThemeData lightTheme = ThemeData(
    brightness: Brightness.light,
    textTheme: UTextTheme.lightTextTheme,
  );
  static ThemeData darkTheme = ThemeData(
    brightness: Brightness.dark,
  );
}
