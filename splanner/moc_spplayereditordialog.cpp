/****************************************************************************
** Meta object code from reading C++ file 'spplayereditordialog.h'
**
** Created by: The Qt Meta Object Compiler version 63 (Qt 4.8.7)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "setPlayGUI/spplayereditordialog.h"
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'spplayereditordialog.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 63
#error "This file was generated using the moc from 4.8.7. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
static const uint qt_meta_data_SpPlayerEditorDialog[] = {

 // content:
       6,       // revision
       0,       // classname
       0,    0, // classinfo
       7,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

 // slots: signature, parameters, type, tag, flags
      22,   21,   21,   21, 0x08,
      48,   21,   21,   21, 0x08,
      72,   21,   21,   21, 0x08,
     103,   97,   21,   21, 0x08,
     155,   97,   21,   21, 0x08,
     213,  205,   21,   21, 0x08,
     249,   97,   21,   21, 0x08,

       0        // eod
};

static const char qt_meta_stringdata_SpPlayerEditorDialog[] = {
    "SpPlayerEditorDialog\0\0on_cancelButton_clicked()\0"
    "on_saveButton_clicked()\0"
    "on_resetButton_clicked()\0index\0"
    "on_comboSelectRelativePlayerPosition_activated(int)\0"
    "on_comboSelectActionRelativePlayer_activated(int)\0"
    "checked\0on_rbPositionAbsolute_clicked(bool)\0"
    "on_playerEditorTabs_currentChanged(int)\0"
};

void SpPlayerEditorDialog::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        Q_ASSERT(staticMetaObject.cast(_o));
        SpPlayerEditorDialog *_t = static_cast<SpPlayerEditorDialog *>(_o);
        switch (_id) {
        case 0: _t->on_cancelButton_clicked(); break;
        case 1: _t->on_saveButton_clicked(); break;
        case 2: _t->on_resetButton_clicked(); break;
        case 3: _t->on_comboSelectRelativePlayerPosition_activated((*reinterpret_cast< int(*)>(_a[1]))); break;
        case 4: _t->on_comboSelectActionRelativePlayer_activated((*reinterpret_cast< int(*)>(_a[1]))); break;
        case 5: _t->on_rbPositionAbsolute_clicked((*reinterpret_cast< bool(*)>(_a[1]))); break;
        case 6: _t->on_playerEditorTabs_currentChanged((*reinterpret_cast< int(*)>(_a[1]))); break;
        default: ;
        }
    }
}

const QMetaObjectExtraData SpPlayerEditorDialog::staticMetaObjectExtraData = {
    0,  qt_static_metacall 
};

const QMetaObject SpPlayerEditorDialog::staticMetaObject = {
    { &QDialog::staticMetaObject, qt_meta_stringdata_SpPlayerEditorDialog,
      qt_meta_data_SpPlayerEditorDialog, &staticMetaObjectExtraData }
};

#ifdef Q_NO_DATA_RELOCATION
const QMetaObject &SpPlayerEditorDialog::getStaticMetaObject() { return staticMetaObject; }
#endif //Q_NO_DATA_RELOCATION

const QMetaObject *SpPlayerEditorDialog::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->metaObject : &staticMetaObject;
}

void *SpPlayerEditorDialog::qt_metacast(const char *_clname)
{
    if (!_clname) return 0;
    if (!strcmp(_clname, qt_meta_stringdata_SpPlayerEditorDialog))
        return static_cast<void*>(const_cast< SpPlayerEditorDialog*>(this));
    return QDialog::qt_metacast(_clname);
}

int SpPlayerEditorDialog::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QDialog::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 7)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 7;
    }
    return _id;
}
QT_END_MOC_NAMESPACE
