<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ErrorTransInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ErrorTransInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  解析任务ID
    * fileName  文件名称
    * objectKey  对象键
    * beginPosition  解析开始位置
    * endPosition  解析结束位置
    * dbName  数据库名称
    * tbName  表名称
    * createTime  任务创建时间，单位毫秒
    * errorMsg  错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'fileName' => 'string',
            'objectKey' => 'string',
            'beginPosition' => 'int',
            'endPosition' => 'int',
            'dbName' => 'string',
            'tbName' => 'string',
            'createTime' => '\DateTime',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  解析任务ID
    * fileName  文件名称
    * objectKey  对象键
    * beginPosition  解析开始位置
    * endPosition  解析结束位置
    * dbName  数据库名称
    * tbName  表名称
    * createTime  任务创建时间，单位毫秒
    * errorMsg  错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'fileName' => null,
        'objectKey' => null,
        'beginPosition' => 'int64',
        'endPosition' => 'int64',
        'dbName' => null,
        'tbName' => null,
        'createTime' => 'date-time',
        'errorMsg' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * id  解析任务ID
    * fileName  文件名称
    * objectKey  对象键
    * beginPosition  解析开始位置
    * endPosition  解析结束位置
    * dbName  数据库名称
    * tbName  表名称
    * createTime  任务创建时间，单位毫秒
    * errorMsg  错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fileName' => 'file_name',
            'objectKey' => 'object_key',
            'beginPosition' => 'begin_position',
            'endPosition' => 'end_position',
            'dbName' => 'db_name',
            'tbName' => 'tb_name',
            'createTime' => 'create_time',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  解析任务ID
    * fileName  文件名称
    * objectKey  对象键
    * beginPosition  解析开始位置
    * endPosition  解析结束位置
    * dbName  数据库名称
    * tbName  表名称
    * createTime  任务创建时间，单位毫秒
    * errorMsg  错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fileName' => 'setFileName',
            'objectKey' => 'setObjectKey',
            'beginPosition' => 'setBeginPosition',
            'endPosition' => 'setEndPosition',
            'dbName' => 'setDbName',
            'tbName' => 'setTbName',
            'createTime' => 'setCreateTime',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  解析任务ID
    * fileName  文件名称
    * objectKey  对象键
    * beginPosition  解析开始位置
    * endPosition  解析结束位置
    * dbName  数据库名称
    * tbName  表名称
    * createTime  任务创建时间，单位毫秒
    * errorMsg  错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fileName' => 'getFileName',
            'objectKey' => 'getObjectKey',
            'beginPosition' => 'getBeginPosition',
            'endPosition' => 'getEndPosition',
            'dbName' => 'getDbName',
            'tbName' => 'getTbName',
            'createTime' => 'getCreateTime',
            'errorMsg' => 'getErrorMsg'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['objectKey'] = isset($data['objectKey']) ? $data['objectKey'] : null;
        $this->container['beginPosition'] = isset($data['beginPosition']) ? $data['beginPosition'] : null;
        $this->container['endPosition'] = isset($data['endPosition']) ? $data['endPosition'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tbName'] = isset($data['tbName']) ? $data['tbName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets id
    *  解析任务ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 解析任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名称
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets objectKey
    *  对象键
    *
    * @return string|null
    */
    public function getObjectKey()
    {
        return $this->container['objectKey'];
    }

    /**
    * Sets objectKey
    *
    * @param string|null $objectKey 对象键
    *
    * @return $this
    */
    public function setObjectKey($objectKey)
    {
        $this->container['objectKey'] = $objectKey;
        return $this;
    }

    /**
    * Gets beginPosition
    *  解析开始位置
    *
    * @return int|null
    */
    public function getBeginPosition()
    {
        return $this->container['beginPosition'];
    }

    /**
    * Sets beginPosition
    *
    * @param int|null $beginPosition 解析开始位置
    *
    * @return $this
    */
    public function setBeginPosition($beginPosition)
    {
        $this->container['beginPosition'] = $beginPosition;
        return $this;
    }

    /**
    * Gets endPosition
    *  解析结束位置
    *
    * @return int|null
    */
    public function getEndPosition()
    {
        return $this->container['endPosition'];
    }

    /**
    * Sets endPosition
    *
    * @param int|null $endPosition 解析结束位置
    *
    * @return $this
    */
    public function setEndPosition($endPosition)
    {
        $this->container['endPosition'] = $endPosition;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets tbName
    *  表名称
    *
    * @return string|null
    */
    public function getTbName()
    {
        return $this->container['tbName'];
    }

    /**
    * Sets tbName
    *
    * @param string|null $tbName 表名称
    *
    * @return $this
    */
    public function setTbName($tbName)
    {
        $this->container['tbName'] = $tbName;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间，单位毫秒
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 任务创建时间，单位毫秒
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

