<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFileStatisticResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFileStatisticResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostNum  服务器总数
    * changeTotalNum  总变更数
    * changeFileNum  变更文件数
    * changeRegistryNum  变更注册表数量
    * modifyNum  修改数量
    * addNum  新增数量
    * deleteNum  删除数量
    * trustNum  trust num
    * untrustNum  untrust num
    * unknownNum  unknown_num
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostNum' => 'int',
            'changeTotalNum' => 'int',
            'changeFileNum' => 'int',
            'changeRegistryNum' => 'int',
            'modifyNum' => 'int',
            'addNum' => 'int',
            'deleteNum' => 'int',
            'trustNum' => 'int',
            'untrustNum' => 'int',
            'unknownNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostNum  服务器总数
    * changeTotalNum  总变更数
    * changeFileNum  变更文件数
    * changeRegistryNum  变更注册表数量
    * modifyNum  修改数量
    * addNum  新增数量
    * deleteNum  删除数量
    * trustNum  trust num
    * untrustNum  untrust num
    * unknownNum  unknown_num
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostNum' => 'int32',
        'changeTotalNum' => null,
        'changeFileNum' => null,
        'changeRegistryNum' => null,
        'modifyNum' => null,
        'addNum' => null,
        'deleteNum' => null,
        'trustNum' => null,
        'untrustNum' => null,
        'unknownNum' => null
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
    * hostNum  服务器总数
    * changeTotalNum  总变更数
    * changeFileNum  变更文件数
    * changeRegistryNum  变更注册表数量
    * modifyNum  修改数量
    * addNum  新增数量
    * deleteNum  删除数量
    * trustNum  trust num
    * untrustNum  untrust num
    * unknownNum  unknown_num
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostNum' => 'host_num',
            'changeTotalNum' => 'change_total_num',
            'changeFileNum' => 'change_file_num',
            'changeRegistryNum' => 'change_registry_num',
            'modifyNum' => 'modify_num',
            'addNum' => 'add_num',
            'deleteNum' => 'delete_num',
            'trustNum' => 'trust_num',
            'untrustNum' => 'untrust_num',
            'unknownNum' => 'unknown_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostNum  服务器总数
    * changeTotalNum  总变更数
    * changeFileNum  变更文件数
    * changeRegistryNum  变更注册表数量
    * modifyNum  修改数量
    * addNum  新增数量
    * deleteNum  删除数量
    * trustNum  trust num
    * untrustNum  untrust num
    * unknownNum  unknown_num
    *
    * @var string[]
    */
    protected static $setters = [
            'hostNum' => 'setHostNum',
            'changeTotalNum' => 'setChangeTotalNum',
            'changeFileNum' => 'setChangeFileNum',
            'changeRegistryNum' => 'setChangeRegistryNum',
            'modifyNum' => 'setModifyNum',
            'addNum' => 'setAddNum',
            'deleteNum' => 'setDeleteNum',
            'trustNum' => 'setTrustNum',
            'untrustNum' => 'setUntrustNum',
            'unknownNum' => 'setUnknownNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostNum  服务器总数
    * changeTotalNum  总变更数
    * changeFileNum  变更文件数
    * changeRegistryNum  变更注册表数量
    * modifyNum  修改数量
    * addNum  新增数量
    * deleteNum  删除数量
    * trustNum  trust num
    * untrustNum  untrust num
    * unknownNum  unknown_num
    *
    * @var string[]
    */
    protected static $getters = [
            'hostNum' => 'getHostNum',
            'changeTotalNum' => 'getChangeTotalNum',
            'changeFileNum' => 'getChangeFileNum',
            'changeRegistryNum' => 'getChangeRegistryNum',
            'modifyNum' => 'getModifyNum',
            'addNum' => 'getAddNum',
            'deleteNum' => 'getDeleteNum',
            'trustNum' => 'getTrustNum',
            'untrustNum' => 'getUntrustNum',
            'unknownNum' => 'getUnknownNum'
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
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['changeTotalNum'] = isset($data['changeTotalNum']) ? $data['changeTotalNum'] : null;
        $this->container['changeFileNum'] = isset($data['changeFileNum']) ? $data['changeFileNum'] : null;
        $this->container['changeRegistryNum'] = isset($data['changeRegistryNum']) ? $data['changeRegistryNum'] : null;
        $this->container['modifyNum'] = isset($data['modifyNum']) ? $data['modifyNum'] : null;
        $this->container['addNum'] = isset($data['addNum']) ? $data['addNum'] : null;
        $this->container['deleteNum'] = isset($data['deleteNum']) ? $data['deleteNum'] : null;
        $this->container['trustNum'] = isset($data['trustNum']) ? $data['trustNum'] : null;
        $this->container['untrustNum'] = isset($data['untrustNum']) ? $data['untrustNum'] : null;
        $this->container['unknownNum'] = isset($data['unknownNum']) ? $data['unknownNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeTotalNum']) && ($this->container['changeTotalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'changeTotalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['changeTotalNum']) && ($this->container['changeTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'changeTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeFileNum']) && ($this->container['changeFileNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'changeFileNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['changeFileNum']) && ($this->container['changeFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'changeFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeRegistryNum']) && ($this->container['changeRegistryNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'changeRegistryNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['changeRegistryNum']) && ($this->container['changeRegistryNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'changeRegistryNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifyNum']) && ($this->container['modifyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'modifyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['modifyNum']) && ($this->container['modifyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'modifyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['addNum']) && ($this->container['addNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'addNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['addNum']) && ($this->container['addNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'addNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deleteNum']) && ($this->container['deleteNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'deleteNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['deleteNum']) && ($this->container['deleteNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'deleteNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trustNum']) && ($this->container['trustNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'trustNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['trustNum']) && ($this->container['trustNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'trustNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['untrustNum']) && ($this->container['untrustNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'untrustNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['untrustNum']) && ($this->container['untrustNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'untrustNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unknownNum']) && ($this->container['unknownNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unknownNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unknownNum']) && ($this->container['unknownNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unknownNum', must be bigger than or equal to 0.";
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
    * Gets hostNum
    *  服务器总数
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum 服务器总数
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets changeTotalNum
    *  总变更数
    *
    * @return int|null
    */
    public function getChangeTotalNum()
    {
        return $this->container['changeTotalNum'];
    }

    /**
    * Sets changeTotalNum
    *
    * @param int|null $changeTotalNum 总变更数
    *
    * @return $this
    */
    public function setChangeTotalNum($changeTotalNum)
    {
        $this->container['changeTotalNum'] = $changeTotalNum;
        return $this;
    }

    /**
    * Gets changeFileNum
    *  变更文件数
    *
    * @return int|null
    */
    public function getChangeFileNum()
    {
        return $this->container['changeFileNum'];
    }

    /**
    * Sets changeFileNum
    *
    * @param int|null $changeFileNum 变更文件数
    *
    * @return $this
    */
    public function setChangeFileNum($changeFileNum)
    {
        $this->container['changeFileNum'] = $changeFileNum;
        return $this;
    }

    /**
    * Gets changeRegistryNum
    *  变更注册表数量
    *
    * @return int|null
    */
    public function getChangeRegistryNum()
    {
        return $this->container['changeRegistryNum'];
    }

    /**
    * Sets changeRegistryNum
    *
    * @param int|null $changeRegistryNum 变更注册表数量
    *
    * @return $this
    */
    public function setChangeRegistryNum($changeRegistryNum)
    {
        $this->container['changeRegistryNum'] = $changeRegistryNum;
        return $this;
    }

    /**
    * Gets modifyNum
    *  修改数量
    *
    * @return int|null
    */
    public function getModifyNum()
    {
        return $this->container['modifyNum'];
    }

    /**
    * Sets modifyNum
    *
    * @param int|null $modifyNum 修改数量
    *
    * @return $this
    */
    public function setModifyNum($modifyNum)
    {
        $this->container['modifyNum'] = $modifyNum;
        return $this;
    }

    /**
    * Gets addNum
    *  新增数量
    *
    * @return int|null
    */
    public function getAddNum()
    {
        return $this->container['addNum'];
    }

    /**
    * Sets addNum
    *
    * @param int|null $addNum 新增数量
    *
    * @return $this
    */
    public function setAddNum($addNum)
    {
        $this->container['addNum'] = $addNum;
        return $this;
    }

    /**
    * Gets deleteNum
    *  删除数量
    *
    * @return int|null
    */
    public function getDeleteNum()
    {
        return $this->container['deleteNum'];
    }

    /**
    * Sets deleteNum
    *
    * @param int|null $deleteNum 删除数量
    *
    * @return $this
    */
    public function setDeleteNum($deleteNum)
    {
        $this->container['deleteNum'] = $deleteNum;
        return $this;
    }

    /**
    * Gets trustNum
    *  trust num
    *
    * @return int|null
    */
    public function getTrustNum()
    {
        return $this->container['trustNum'];
    }

    /**
    * Sets trustNum
    *
    * @param int|null $trustNum trust num
    *
    * @return $this
    */
    public function setTrustNum($trustNum)
    {
        $this->container['trustNum'] = $trustNum;
        return $this;
    }

    /**
    * Gets untrustNum
    *  untrust num
    *
    * @return int|null
    */
    public function getUntrustNum()
    {
        return $this->container['untrustNum'];
    }

    /**
    * Sets untrustNum
    *
    * @param int|null $untrustNum untrust num
    *
    * @return $this
    */
    public function setUntrustNum($untrustNum)
    {
        $this->container['untrustNum'] = $untrustNum;
        return $this;
    }

    /**
    * Gets unknownNum
    *  unknown_num
    *
    * @return int|null
    */
    public function getUnknownNum()
    {
        return $this->container['unknownNum'];
    }

    /**
    * Sets unknownNum
    *
    * @param int|null $unknownNum unknown_num
    *
    * @return $this
    */
    public function setUnknownNum($unknownNum)
    {
        $this->container['unknownNum'] = $unknownNum;
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

