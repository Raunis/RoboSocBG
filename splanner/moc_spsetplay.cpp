/****************************************************************************
** Meta object code from reading C++ file 'spsetplay.h'
**
** Created by: The Qt Meta Object Compiler version 63 (Qt 4.8.7)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "setPlayGUI/spsetplay.h"
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'spsetplay.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 63
#error "This file was generated using the moc from 4.8.7. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
static const uint qt_meta_data_SpSetPlay[] = {

 // content:
       6,       // revision
       0,       // classname
       0,    0, // classinfo
       8,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

 // slots: signature, parameters, type, tag, flags
      11,   10,   10,   10, 0x08,
      31,   10,   10,   10, 0x08,
      63,   10,   10,   10, 0x08,
      96,   10,   10,   10, 0x08,
     126,   10,   10,   10, 0x08,
     140,   10,   10,   10, 0x08,
     156,   10,   10,   10, 0x08,
     190,   10,   10,   10, 0x08,

       0        // eod
};

static const char qt_meta_stringdata_SpSetPlay[] = {
    "SpSetPlay\0\0on_name_lostFocus()\0"
    "on_invertible_stateChanged(int)\0"
    "on_abortTimeCB_stateChanged(int)\0"
    "on_waitTime_valueChanged(int)\0"
    "run(QAction*)\0uploadLogFile()\0"
    "on_showPlayerInfoButton_clicked()\0"
    "on_editPlayerButton_clicked()\0"
};

void SpSetPlay::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        Q_ASSERT(staticMetaObject.cast(_o));
        SpSetPlay *_t = static_cast<SpSetPlay *>(_o);
        switch (_id) {
        case 0: _t->on_name_lostFocus(); break;
        case 1: _t->on_invertible_stateChanged((*reinterpret_cast< int(*)>(_a[1]))); break;
        case 2: _t->on_abortTimeCB_stateChanged((*reinterpret_cast< int(*)>(_a[1]))); break;
        case 3: _t->on_waitTime_valueChanged((*reinterpret_cast< int(*)>(_a[1]))); break;
        case 4: _t->run((*reinterpret_cast< QAction*(*)>(_a[1]))); break;
        case 5: _t->uploadLogFile(); break;
        case 6: _t->on_showPlayerInfoButton_clicked(); break;
        case 7: _t->on_editPlayerButton_clicked(); break;
        default: ;
        }
    }
}

const QMetaObjectExtraData SpSetPlay::staticMetaObjectExtraData = {
    0,  qt_static_metacall 
};

const QMetaObject SpSetPlay::staticMetaObject = {
    { &QWidget::staticMetaObject, qt_meta_stringdata_SpSetPlay,
      qt_meta_data_SpSetPlay, &staticMetaObjectExtraData }
};

#ifdef Q_NO_DATA_RELOCATION
const QMetaObject &SpSetPlay::getStaticMetaObject() { return staticMetaObject; }
#endif //Q_NO_DATA_RELOCATION

const QMetaObject *SpSetPlay::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->metaObject : &staticMetaObject;
}

void *SpSetPlay::qt_metacast(const char *_clname)
{
    if (!_clname) return 0;
    if (!strcmp(_clname, qt_meta_stringdata_SpSetPlay))
        return static_cast<void*>(const_cast< SpSetPlay*>(this));
    return QWidget::qt_metacast(_clname);
}

int SpSetPlay::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QWidget::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 8)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 8;
    }
    return _id;
}
QT_END_MOC_NAMESPACE
