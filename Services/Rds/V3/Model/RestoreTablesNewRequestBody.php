<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreTablesNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreTablesNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * restoreTime  恢复时间戳
    * restoreTables  表信息
    * isFastRestore  是否使用极速恢复，可先根据“获取实例是否能使用极速恢复”接口判断本次恢复是否能使用急速恢复。 如果实例使用了XA事务，则不可使用极速恢复！使用恢复会导致恢复失败！
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'restoreTime' => 'int',
            'restoreTables' => '\HuaweiCloud\SDK\Rds\V3\Model\RestoreDatabasesInfoNew[]',
            'isFastRestore' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * restoreTime  恢复时间戳
    * restoreTables  表信息
    * isFastRestore  是否使用极速恢复，可先根据“获取实例是否能使用极速恢复”接口判断本次恢复是否能使用急速恢复。 如果实例使用了XA事务，则不可使用极速恢复！使用恢复会导致恢复失败！
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'restoreTime' => 'int64',
        'restoreTables' => null,
        'isFastRestore' => null
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
    * restoreTime  恢复时间戳
    * restoreTables  表信息
    * isFastRestore  是否使用极速恢复，可先根据“获取实例是否能使用极速恢复”接口判断本次恢复是否能使用急速恢复。 如果实例使用了XA事务，则不可使用极速恢复！使用恢复会导致恢复失败！
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'restoreTime' => 'restore_time',
            'restoreTables' => 'restore_tables',
            'isFastRestore' => 'is_fast_restore'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * restoreTime  恢复时间戳
    * restoreTables  表信息
    * isFastRestore  是否使用极速恢复，可先根据“获取实例是否能使用极速恢复”接口判断本次恢复是否能使用急速恢复。 如果实例使用了XA事务，则不可使用极速恢复！使用恢复会导致恢复失败！
    *
    * @var string[]
    */
    protected static $setters = [
            'restoreTime' => 'setRestoreTime',
            'restoreTables' => 'setRestoreTables',
            'isFastRestore' => 'setIsFastRestore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * restoreTime  恢复时间戳
    * restoreTables  表信息
    * isFastRestore  是否使用极速恢复，可先根据“获取实例是否能使用极速恢复”接口判断本次恢复是否能使用急速恢复。 如果实例使用了XA事务，则不可使用极速恢复！使用恢复会导致恢复失败！
    *
    * @var string[]
    */
    protected static $getters = [
            'restoreTime' => 'getRestoreTime',
            'restoreTables' => 'getRestoreTables',
            'isFastRestore' => 'getIsFastRestore'
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
        $this->container['restoreTime'] = isset($data['restoreTime']) ? $data['restoreTime'] : null;
        $this->container['restoreTables'] = isset($data['restoreTables']) ? $data['restoreTables'] : null;
        $this->container['isFastRestore'] = isset($data['isFastRestore']) ? $data['isFastRestore'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['restoreTime'] === null) {
            $invalidProperties[] = "'restoreTime' can't be null";
        }
        if ($this->container['restoreTables'] === null) {
            $invalidProperties[] = "'restoreTables' can't be null";
        }
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
    * Gets restoreTime
    *  恢复时间戳
    *
    * @return int
    */
    public function getRestoreTime()
    {
        return $this->container['restoreTime'];
    }

    /**
    * Sets restoreTime
    *
    * @param int $restoreTime 恢复时间戳
    *
    * @return $this
    */
    public function setRestoreTime($restoreTime)
    {
        $this->container['restoreTime'] = $restoreTime;
        return $this;
    }

    /**
    * Gets restoreTables
    *  表信息
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\RestoreDatabasesInfoNew[]
    */
    public function getRestoreTables()
    {
        return $this->container['restoreTables'];
    }

    /**
    * Sets restoreTables
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\RestoreDatabasesInfoNew[] $restoreTables 表信息
    *
    * @return $this
    */
    public function setRestoreTables($restoreTables)
    {
        $this->container['restoreTables'] = $restoreTables;
        return $this;
    }

    /**
    * Gets isFastRestore
    *  是否使用极速恢复，可先根据“获取实例是否能使用极速恢复”接口判断本次恢复是否能使用急速恢复。 如果实例使用了XA事务，则不可使用极速恢复！使用恢复会导致恢复失败！
    *
    * @return bool|null
    */
    public function getIsFastRestore()
    {
        return $this->container['isFastRestore'];
    }

    /**
    * Sets isFastRestore
    *
    * @param bool|null $isFastRestore 是否使用极速恢复，可先根据“获取实例是否能使用极速恢复”接口判断本次恢复是否能使用急速恢复。 如果实例使用了XA事务，则不可使用极速恢复！使用恢复会导致恢复失败！
    *
    * @return $this
    */
    public function setIsFastRestore($isFastRestore)
    {
        $this->container['isFastRestore'] = $isFastRestore;
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

