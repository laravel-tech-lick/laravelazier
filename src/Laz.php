<?php

namespace Laravelazier;

class Laz
{
    public function pdf(): Pdf
    {
        return new Pdf();
    }

    public function excel(): Excel
    {
        return new Excel();
    }
}
