<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModelStatisticVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModelStatisticVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bizType  bizType
    * level  level
    * db  数据库。
    * tb  数据表。
    * tbPublished  已发布的数据表。
    * fd  字段。
    * fdPublished  已发布的字段。
    * st  标准覆盖率。
    * stPublished  已发布的标准覆盖率。
    * model  model
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'level' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelLevel',
            'db' => 'int',
            'tb' => 'int',
            'tbPublished' => 'int',
            'fd' => 'int',
            'fdPublished' => 'int',
            'st' => 'double',
            'stPublished' => 'double',
            'model' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\WorkspaceVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bizType  bizType
    * level  level
    * db  数据库。
    * tb  数据表。
    * tbPublished  已发布的数据表。
    * fd  字段。
    * fdPublished  已发布的字段。
    * st  标准覆盖率。
    * stPublished  已发布的标准覆盖率。
    * model  model
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bizType' => null,
        'level' => null,
        'db' => 'int32',
        'tb' => 'int32',
        'tbPublished' => 'int32',
        'fd' => 'int32',
        'fdPublished' => 'int32',
        'st' => 'double',
        'stPublished' => 'double',
        'model' => null
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
    * bizType  bizType
    * level  level
    * db  数据库。
    * tb  数据表。
    * tbPublished  已发布的数据表。
    * fd  字段。
    * fdPublished  已发布的字段。
    * st  标准覆盖率。
    * stPublished  已发布的标准覆盖率。
    * model  model
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bizType' => 'biz_type',
            'level' => 'level',
            'db' => 'db',
            'tb' => 'tb',
            'tbPublished' => 'tb_published',
            'fd' => 'fd',
            'fdPublished' => 'fd_published',
            'st' => 'st',
            'stPublished' => 'st_published',
            'model' => 'model'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bizType  bizType
    * level  level
    * db  数据库。
    * tb  数据表。
    * tbPublished  已发布的数据表。
    * fd  字段。
    * fdPublished  已发布的字段。
    * st  标准覆盖率。
    * stPublished  已发布的标准覆盖率。
    * model  model
    *
    * @var string[]
    */
    protected static $setters = [
            'bizType' => 'setBizType',
            'level' => 'setLevel',
            'db' => 'setDb',
            'tb' => 'setTb',
            'tbPublished' => 'setTbPublished',
            'fd' => 'setFd',
            'fdPublished' => 'setFdPublished',
            'st' => 'setSt',
            'stPublished' => 'setStPublished',
            'model' => 'setModel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bizType  bizType
    * level  level
    * db  数据库。
    * tb  数据表。
    * tbPublished  已发布的数据表。
    * fd  字段。
    * fdPublished  已发布的字段。
    * st  标准覆盖率。
    * stPublished  已发布的标准覆盖率。
    * model  model
    *
    * @var string[]
    */
    protected static $getters = [
            'bizType' => 'getBizType',
            'level' => 'getLevel',
            'db' => 'getDb',
            'tb' => 'getTb',
            'tbPublished' => 'getTbPublished',
            'fd' => 'getFd',
            'fdPublished' => 'getFdPublished',
            'st' => 'getSt',
            'stPublished' => 'getStPublished',
            'model' => 'getModel'
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
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['tb'] = isset($data['tb']) ? $data['tb'] : null;
        $this->container['tbPublished'] = isset($data['tbPublished']) ? $data['tbPublished'] : null;
        $this->container['fd'] = isset($data['fd']) ? $data['fd'] : null;
        $this->container['fdPublished'] = isset($data['fdPublished']) ? $data['fdPublished'] : null;
        $this->container['st'] = isset($data['st']) ? $data['st'] : null;
        $this->container['stPublished'] = isset($data['stPublished']) ? $data['stPublished'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
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
    * Gets bizType
    *  bizType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null $bizType bizType
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets level
    *  level
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelLevel|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelLevel|null $level level
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets db
    *  数据库。
    *
    * @return int|null
    */
    public function getDb()
    {
        return $this->container['db'];
    }

    /**
    * Sets db
    *
    * @param int|null $db 数据库。
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
        return $this;
    }

    /**
    * Gets tb
    *  数据表。
    *
    * @return int|null
    */
    public function getTb()
    {
        return $this->container['tb'];
    }

    /**
    * Sets tb
    *
    * @param int|null $tb 数据表。
    *
    * @return $this
    */
    public function setTb($tb)
    {
        $this->container['tb'] = $tb;
        return $this;
    }

    /**
    * Gets tbPublished
    *  已发布的数据表。
    *
    * @return int|null
    */
    public function getTbPublished()
    {
        return $this->container['tbPublished'];
    }

    /**
    * Sets tbPublished
    *
    * @param int|null $tbPublished 已发布的数据表。
    *
    * @return $this
    */
    public function setTbPublished($tbPublished)
    {
        $this->container['tbPublished'] = $tbPublished;
        return $this;
    }

    /**
    * Gets fd
    *  字段。
    *
    * @return int|null
    */
    public function getFd()
    {
        return $this->container['fd'];
    }

    /**
    * Sets fd
    *
    * @param int|null $fd 字段。
    *
    * @return $this
    */
    public function setFd($fd)
    {
        $this->container['fd'] = $fd;
        return $this;
    }

    /**
    * Gets fdPublished
    *  已发布的字段。
    *
    * @return int|null
    */
    public function getFdPublished()
    {
        return $this->container['fdPublished'];
    }

    /**
    * Sets fdPublished
    *
    * @param int|null $fdPublished 已发布的字段。
    *
    * @return $this
    */
    public function setFdPublished($fdPublished)
    {
        $this->container['fdPublished'] = $fdPublished;
        return $this;
    }

    /**
    * Gets st
    *  标准覆盖率。
    *
    * @return double|null
    */
    public function getSt()
    {
        return $this->container['st'];
    }

    /**
    * Sets st
    *
    * @param double|null $st 标准覆盖率。
    *
    * @return $this
    */
    public function setSt($st)
    {
        $this->container['st'] = $st;
        return $this;
    }

    /**
    * Gets stPublished
    *  已发布的标准覆盖率。
    *
    * @return double|null
    */
    public function getStPublished()
    {
        return $this->container['stPublished'];
    }

    /**
    * Sets stPublished
    *
    * @param double|null $stPublished 已发布的标准覆盖率。
    *
    * @return $this
    */
    public function setStPublished($stPublished)
    {
        $this->container['stPublished'] = $stPublished;
        return $this;
    }

    /**
    * Gets model
    *  model
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\WorkspaceVO|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\WorkspaceVO|null $model model
    *
    * @return $this
    */
    public function setModel($model)
    {
        $this->container['model'] = $model;
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

