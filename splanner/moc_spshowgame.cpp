/****************************************************************************
** Meta object code from reading C++ file 'spshowgame.h'
**
** Created by: The Qt Meta Object Compiler version 63 (Qt 4.8.7)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "setPlayGUI/spshowgame.h"
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'spshowgame.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 63
#error "This file was generated using the moc from 4.8.7. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
static const uint qt_meta_data_SpShowGame[] = {

 // content:
       6,       // revision
       0,       // classname
       0,    0, // classinfo
       7,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       1,       // signalCount

 // signals: signature, parameters, type, tag, flags
      12,   11,   11,   11, 0x05,

 // slots: signature, parameters, type, tag, flags
      26,   11,   11,   11, 0x08,
      51,   11,   11,   11, 0x08,
      72,   11,   11,   11, 0x08,
     101,   11,   96,   11, 0x0a,
     111,   11,   11,   11, 0x0a,
     122,   11,   11,   11, 0x0a,

       0        // eod
};

static const char qt_meta_stringdata_SpShowGame[] = {
    "SpShowGame\0\0viewUpdated()\0"
    "toggleShowPlayerNumber()\0toggleShowViewArea()\0"
    "toggleShowOffsideLine()\0bool\0openRCG()\0"
    "hideShow()\0finish()\0"
};

void SpShowGame::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        Q_ASSERT(staticMetaObject.cast(_o));
        SpShowGame *_t = static_cast<SpShowGame *>(_o);
        switch (_id) {
        case 0: _t->viewUpdated(); break;
        case 1: _t->toggleShowPlayerNumber(); break;
        case 2: _t->toggleShowViewArea(); break;
        case 3: _t->toggleShowOffsideLine(); break;
        case 4: { bool _r = _t->openRCG();
            if (_a[0]) *reinterpret_cast< bool*>(_a[0]) = _r; }  break;
        case 5: _t->hideShow(); break;
        case 6: _t->finish(); break;
        default: ;
        }
    }
}

const QMetaObjectExtraData SpShowGame::staticMetaObjectExtraData = {
    0,  qt_static_metacall 
};

const QMetaObject SpShowGame::staticMetaObject = {
    { &QObject::staticMetaObject, qt_meta_stringdata_SpShowGame,
      qt_meta_data_SpShowGame, &staticMetaObjectExtraData }
};

#ifdef Q_NO_DATA_RELOCATION
const QMetaObject &SpShowGame::getStaticMetaObject() { return staticMetaObject; }
#endif //Q_NO_DATA_RELOCATION

const QMetaObject *SpShowGame::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->metaObject : &staticMetaObject;
}

void *SpShowGame::qt_metacast(const char *_clname)
{
    if (!_clname) return 0;
    if (!strcmp(_clname, qt_meta_stringdata_SpShowGame))
        return static_cast<void*>(const_cast< SpShowGame*>(this));
    return QObject::qt_metacast(_clname);
}

int SpShowGame::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QObject::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 7)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 7;
    }
    return _id;
}

// SIGNAL 0
void SpShowGame::viewUpdated()
{
    QMetaObject::activate(this, &staticMetaObject, 0, 0);
}
QT_END_MOC_NAMESPACE
