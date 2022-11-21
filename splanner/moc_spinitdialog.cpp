/****************************************************************************
** Meta object code from reading C++ file 'spinitdialog.h'
**
** Created by: The Qt Meta Object Compiler version 63 (Qt 4.8.7)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "setPlayGUI/spinitdialog.h"
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'spinitdialog.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 63
#error "This file was generated using the moc from 4.8.7. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
static const uint qt_meta_data_SpInitDialog[] = {

 // content:
       6,       // revision
       0,       // classname
       0,    0, // classinfo
       9,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

 // slots: signature, parameters, type, tag, flags
      14,   13,   13,   13, 0x08,
      64,   13,   13,   13, 0x08,
      94,   13,   13,   13, 0x08,
     124,   13,   13,   13, 0x08,
     160,   13,   13,   13, 0x08,
     206,  198,   13,   13, 0x08,
     231,  198,   13,   13, 0x08,
     255,   13,   13,   13, 0x08,
     281,   13,   13,   13, 0x08,

       0        // eod
};

static const char qt_meta_stringdata_SpInitDialog[] = {
    "SpInitDialog\0\0"
    "on_situationComboBox_currentIndexChanged(QString)\0"
    "on_fieldBox_stateChanged(int)\0"
    "on_pointBox_stateChanged(int)\0"
    "on_ourMiddleField_stateChanged(int)\0"
    "on_theirMiddleField_stateChanged(int)\0"
    "checked\0on_rightCB_clicked(bool)\0"
    "on_leftCB_clicked(bool)\0"
    "on_cancelButton_clicked()\0"
    "on_createButton_clicked()\0"
};

void SpInitDialog::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        Q_ASSERT(staticMetaObject.cast(_o));
        SpInitDialog *_t = static_cast<SpInitDialog *>(_o);
        switch (_id) {
        case 0: _t->on_situationComboBox_currentIndexChanged((*reinterpret_cast< QString(*)>(_a[1]))); break;
        case 1: _t->on_fieldBox_stateChanged((*reinterpret_cast< int(*)>(_a[1]))); break;
        case 2: _t->on_pointBox_stateChanged((*reinterpret_cast< int(*)>(_a[1]))); break;
        case 3: _t->on_ourMiddleField_stateChanged((*reinterpret_cast< int(*)>(_a[1]))); break;
        case 4: _t->on_theirMiddleField_stateChanged((*reinterpret_cast< int(*)>(_a[1]))); break;
        case 5: _t->on_rightCB_clicked((*reinterpret_cast< bool(*)>(_a[1]))); break;
        case 6: _t->on_leftCB_clicked((*reinterpret_cast< bool(*)>(_a[1]))); break;
        case 7: _t->on_cancelButton_clicked(); break;
        case 8: _t->on_createButton_clicked(); break;
        default: ;
        }
    }
}

const QMetaObjectExtraData SpInitDialog::staticMetaObjectExtraData = {
    0,  qt_static_metacall 
};

const QMetaObject SpInitDialog::staticMetaObject = {
    { &QDialog::staticMetaObject, qt_meta_stringdata_SpInitDialog,
      qt_meta_data_SpInitDialog, &staticMetaObjectExtraData }
};

#ifdef Q_NO_DATA_RELOCATION
const QMetaObject &SpInitDialog::getStaticMetaObject() { return staticMetaObject; }
#endif //Q_NO_DATA_RELOCATION

const QMetaObject *SpInitDialog::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->metaObject : &staticMetaObject;
}

void *SpInitDialog::qt_metacast(const char *_clname)
{
    if (!_clname) return 0;
    if (!strcmp(_clname, qt_meta_stringdata_SpInitDialog))
        return static_cast<void*>(const_cast< SpInitDialog*>(this));
    return QDialog::qt_metacast(_clname);
}

int SpInitDialog::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QDialog::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 9)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 9;
    }
    return _id;
}
QT_END_MOC_NAMESPACE
