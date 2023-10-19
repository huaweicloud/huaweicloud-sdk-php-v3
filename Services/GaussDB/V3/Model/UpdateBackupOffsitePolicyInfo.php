<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateBackupOffsitePolicyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateBackupOffsitePolicyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * openAutoBackup  是否开启跨区域全量备份。 - true：开启跨区域全量备份。 - false：关闭跨区域全量备份。
    * openIncrementalBackup  是否开启跨区域增量备份。 - true：开启跨区域增量备份，当open_auto_backup开启时才可以开启。 - false：关闭跨区域增量备份。
    * destinationProjectId  设置跨区域备份策略的目标project ID。    租户在某一Region下的project ID。                              获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-gaussdb/gaussdb_10_0004.html)。
    * destinationRegion  设置跨区域备份策略的目标区域。
    * keepDays  指定已生成的备份文件可以保存的天数。  取值范围：1～1825。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'openAutoBackup' => 'bool',
            'openIncrementalBackup' => 'bool',
            'destinationProjectId' => 'string',
            'destinationRegion' => 'string',
            'keepDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * openAutoBackup  是否开启跨区域全量备份。 - true：开启跨区域全量备份。 - false：关闭跨区域全量备份。
    * openIncrementalBackup  是否开启跨区域增量备份。 - true：开启跨区域增量备份，当open_auto_backup开启时才可以开启。 - false：关闭跨区域增量备份。
    * destinationProjectId  设置跨区域备份策略的目标project ID。    租户在某一Region下的project ID。                              获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-gaussdb/gaussdb_10_0004.html)。
    * destinationRegion  设置跨区域备份策略的目标区域。
    * keepDays  指定已生成的备份文件可以保存的天数。  取值范围：1～1825。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'openAutoBackup' => null,
        'openIncrementalBackup' => null,
        'destinationProjectId' => null,
        'destinationRegion' => null,
        'keepDays' => null
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
    * openAutoBackup  是否开启跨区域全量备份。 - true：开启跨区域全量备份。 - false：关闭跨区域全量备份。
    * openIncrementalBackup  是否开启跨区域增量备份。 - true：开启跨区域增量备份，当open_auto_backup开启时才可以开启。 - false：关闭跨区域增量备份。
    * destinationProjectId  设置跨区域备份策略的目标project ID。    租户在某一Region下的project ID。                              获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-gaussdb/gaussdb_10_0004.html)。
    * destinationRegion  设置跨区域备份策略的目标区域。
    * keepDays  指定已生成的备份文件可以保存的天数。  取值范围：1～1825。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'openAutoBackup' => 'open_auto_backup',
            'openIncrementalBackup' => 'open_incremental_backup',
            'destinationProjectId' => 'destination_project_id',
            'destinationRegion' => 'destination_region',
            'keepDays' => 'keep_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * openAutoBackup  是否开启跨区域全量备份。 - true：开启跨区域全量备份。 - false：关闭跨区域全量备份。
    * openIncrementalBackup  是否开启跨区域增量备份。 - true：开启跨区域增量备份，当open_auto_backup开启时才可以开启。 - false：关闭跨区域增量备份。
    * destinationProjectId  设置跨区域备份策略的目标project ID。    租户在某一Region下的project ID。                              获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-gaussdb/gaussdb_10_0004.html)。
    * destinationRegion  设置跨区域备份策略的目标区域。
    * keepDays  指定已生成的备份文件可以保存的天数。  取值范围：1～1825。
    *
    * @var string[]
    */
    protected static $setters = [
            'openAutoBackup' => 'setOpenAutoBackup',
            'openIncrementalBackup' => 'setOpenIncrementalBackup',
            'destinationProjectId' => 'setDestinationProjectId',
            'destinationRegion' => 'setDestinationRegion',
            'keepDays' => 'setKeepDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * openAutoBackup  是否开启跨区域全量备份。 - true：开启跨区域全量备份。 - false：关闭跨区域全量备份。
    * openIncrementalBackup  是否开启跨区域增量备份。 - true：开启跨区域增量备份，当open_auto_backup开启时才可以开启。 - false：关闭跨区域增量备份。
    * destinationProjectId  设置跨区域备份策略的目标project ID。    租户在某一Region下的project ID。                              获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-gaussdb/gaussdb_10_0004.html)。
    * destinationRegion  设置跨区域备份策略的目标区域。
    * keepDays  指定已生成的备份文件可以保存的天数。  取值范围：1～1825。
    *
    * @var string[]
    */
    protected static $getters = [
            'openAutoBackup' => 'getOpenAutoBackup',
            'openIncrementalBackup' => 'getOpenIncrementalBackup',
            'destinationProjectId' => 'getDestinationProjectId',
            'destinationRegion' => 'getDestinationRegion',
            'keepDays' => 'getKeepDays'
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
        $this->container['openAutoBackup'] = isset($data['openAutoBackup']) ? $data['openAutoBackup'] : null;
        $this->container['openIncrementalBackup'] = isset($data['openIncrementalBackup']) ? $data['openIncrementalBackup'] : null;
        $this->container['destinationProjectId'] = isset($data['destinationProjectId']) ? $data['destinationProjectId'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['openAutoBackup'] === null) {
            $invalidProperties[] = "'openAutoBackup' can't be null";
        }
        if ($this->container['openIncrementalBackup'] === null) {
            $invalidProperties[] = "'openIncrementalBackup' can't be null";
        }
        if ($this->container['destinationProjectId'] === null) {
            $invalidProperties[] = "'destinationProjectId' can't be null";
        }
        if ($this->container['destinationRegion'] === null) {
            $invalidProperties[] = "'destinationRegion' can't be null";
        }
        if ($this->container['keepDays'] === null) {
            $invalidProperties[] = "'keepDays' can't be null";
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
    * Gets openAutoBackup
    *  是否开启跨区域全量备份。 - true：开启跨区域全量备份。 - false：关闭跨区域全量备份。
    *
    * @return bool
    */
    public function getOpenAutoBackup()
    {
        return $this->container['openAutoBackup'];
    }

    /**
    * Sets openAutoBackup
    *
    * @param bool $openAutoBackup 是否开启跨区域全量备份。 - true：开启跨区域全量备份。 - false：关闭跨区域全量备份。
    *
    * @return $this
    */
    public function setOpenAutoBackup($openAutoBackup)
    {
        $this->container['openAutoBackup'] = $openAutoBackup;
        return $this;
    }

    /**
    * Gets openIncrementalBackup
    *  是否开启跨区域增量备份。 - true：开启跨区域增量备份，当open_auto_backup开启时才可以开启。 - false：关闭跨区域增量备份。
    *
    * @return bool
    */
    public function getOpenIncrementalBackup()
    {
        return $this->container['openIncrementalBackup'];
    }

    /**
    * Sets openIncrementalBackup
    *
    * @param bool $openIncrementalBackup 是否开启跨区域增量备份。 - true：开启跨区域增量备份，当open_auto_backup开启时才可以开启。 - false：关闭跨区域增量备份。
    *
    * @return $this
    */
    public function setOpenIncrementalBackup($openIncrementalBackup)
    {
        $this->container['openIncrementalBackup'] = $openIncrementalBackup;
        return $this;
    }

    /**
    * Gets destinationProjectId
    *  设置跨区域备份策略的目标project ID。    租户在某一Region下的project ID。                              获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-gaussdb/gaussdb_10_0004.html)。
    *
    * @return string
    */
    public function getDestinationProjectId()
    {
        return $this->container['destinationProjectId'];
    }

    /**
    * Sets destinationProjectId
    *
    * @param string $destinationProjectId 设置跨区域备份策略的目标project ID。    租户在某一Region下的project ID。                              获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-gaussdb/gaussdb_10_0004.html)。
    *
    * @return $this
    */
    public function setDestinationProjectId($destinationProjectId)
    {
        $this->container['destinationProjectId'] = $destinationProjectId;
        return $this;
    }

    /**
    * Gets destinationRegion
    *  设置跨区域备份策略的目标区域。
    *
    * @return string
    */
    public function getDestinationRegion()
    {
        return $this->container['destinationRegion'];
    }

    /**
    * Sets destinationRegion
    *
    * @param string $destinationRegion 设置跨区域备份策略的目标区域。
    *
    * @return $this
    */
    public function setDestinationRegion($destinationRegion)
    {
        $this->container['destinationRegion'] = $destinationRegion;
        return $this;
    }

    /**
    * Gets keepDays
    *  指定已生成的备份文件可以保存的天数。  取值范围：1～1825。
    *
    * @return int
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int $keepDays 指定已生成的备份文件可以保存的天数。  取值范围：1～1825。
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
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

