/****************************************************************************
** Meta object code from reading C++ file 'field_canvas.h'
**
** Created by: The Qt Meta Object Compiler version 63 (Qt 4.8.7)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "setPlayGUI/rcsslog/qt4/field_canvas.h"
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'field_canvas.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 63
#error "This file was generated using the moc from 4.8.7. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
static const uint qt_meta_data_FieldCanvas[] = {

 // content:
       6,       // revision
       0,       // classname
       0,    0, // classinfo
       4,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       4,       // signalCount

 // signals: signature, parameters, type, tag, flags
      19,   13,   12,   12, 0x05,
      46,   39,   12,   12, 0x05,
      66,   13,   12,   12, 0x05,
      87,   13,   12,   12, 0x05,

       0        // eod
};

static const char qt_meta_stringdata_FieldCanvas[] = {
    "FieldCanvas\0\0point\0playerMoved(QPoint)\0"
    "number\0playerSelected(int)\0"
    "focusChanged(QPoint)\0mouseMoved(QPoint)\0"
};

void FieldCanvas::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        Q_ASSERT(staticMetaObject.cast(_o));
        FieldCanvas *_t = static_cast<FieldCanvas *>(_o);
        switch (_id) {
        case 0: _t->playerMoved((*reinterpret_cast< const QPoint(*)>(_a[1]))); break;
        case 1: _t->playerSelected((*reinterpret_cast< int(*)>(_a[1]))); break;
        case 2: _t->focusChanged((*reinterpret_cast< const QPoint(*)>(_a[1]))); break;
        case 3: _t->mouseMoved((*reinterpret_cast< const QPoint(*)>(_a[1]))); break;
        default: ;
        }
    }
}

const QMetaObjectExtraData FieldCanvas::staticMetaObjectExtraData = {
    0,  qt_static_metacall 
};

const QMetaObject FieldCanvas::staticMetaObject = {
    { &QFrame::staticMetaObject, qt_meta_stringdata_FieldCanvas,
      qt_meta_data_FieldCanvas, &staticMetaObjectExtraData }
};

#ifdef Q_NO_DATA_RELOCATION
const QMetaObject &FieldCanvas::getStaticMetaObject() { return staticMetaObject; }
#endif //Q_NO_DATA_RELOCATION

const QMetaObject *FieldCanvas::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->metaObject : &staticMetaObject;
}

void *FieldCanvas::qt_metacast(const char *_clname)
{
    if (!_clname) return 0;
    if (!strcmp(_clname, qt_meta_stringdata_FieldCanvas))
        return static_cast<void*>(const_cast< FieldCanvas*>(this));
    return QFrame::qt_metacast(_clname);
}

int FieldCanvas::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QFrame::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 4)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 4;
    }
    return _id;
}

// SIGNAL 0
void FieldCanvas::playerMoved(const QPoint & _t1)
{
    void *_a[] = { 0, const_cast<void*>(reinterpret_cast<const void*>(&_t1)) };
    QMetaObject::activate(this, &staticMetaObject, 0, _a);
}

// SIGNAL 1
void FieldCanvas::playerSelected(int _t1)
{
    void *_a[] = { 0, const_cast<void*>(reinterpret_cast<const void*>(&_t1)) };
    QMetaObject::activate(this, &staticMetaObject, 1, _a);
}

// SIGNAL 2
void FieldCanvas::focusChanged(const QPoint & _t1)
{
    void *_a[] = { 0, const_cast<void*>(reinterpret_cast<const void*>(&_t1)) };
    QMetaObject::activate(this, &staticMetaObject, 2, _a);
}

// SIGNAL 3
void FieldCanvas::mouseMoved(const QPoint & _t1)
{
    void *_a[] = { 0, const_cast<void*>(reinterpret_cast<const void*>(&_t1)) };
    QMetaObject::activate(this, &staticMetaObject, 3, _a);
}
QT_END_MOC_NAMESPACE
