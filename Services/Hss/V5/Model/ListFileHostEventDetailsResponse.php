<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFileHostEventDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFileHostEventDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  文件总条数
    * changeTotalNum  变更总数
    * changeFileNum  变更文件数量
    * changeRegistryNum  变更注册表数量
    * hostName  服务器名称
    * dataList  变更文件信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'changeTotalNum' => 'int',
            'changeFileNum' => 'int',
            'changeRegistryNum' => 'int',
            'hostName' => 'string',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\FileHostEventDetailResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  文件总条数
    * changeTotalNum  变更总数
    * changeFileNum  变更文件数量
    * changeRegistryNum  变更注册表数量
    * hostName  服务器名称
    * dataList  变更文件信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'changeTotalNum' => 'int32',
        'changeFileNum' => 'int32',
        'changeRegistryNum' => 'int32',
        'hostName' => null,
        'dataList' => null
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
    * totalNum  文件总条数
    * changeTotalNum  变更总数
    * changeFileNum  变更文件数量
    * changeRegistryNum  变更注册表数量
    * hostName  服务器名称
    * dataList  变更文件信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'changeTotalNum' => 'change_total_num',
            'changeFileNum' => 'change_file_num',
            'changeRegistryNum' => 'change_registry_num',
            'hostName' => 'host_name',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  文件总条数
    * changeTotalNum  变更总数
    * changeFileNum  变更文件数量
    * changeRegistryNum  变更注册表数量
    * hostName  服务器名称
    * dataList  变更文件信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'changeTotalNum' => 'setChangeTotalNum',
            'changeFileNum' => 'setChangeFileNum',
            'changeRegistryNum' => 'setChangeRegistryNum',
            'hostName' => 'setHostName',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  文件总条数
    * changeTotalNum  变更总数
    * changeFileNum  变更文件数量
    * changeRegistryNum  变更注册表数量
    * hostName  服务器名称
    * dataList  变更文件信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'changeTotalNum' => 'getChangeTotalNum',
            'changeFileNum' => 'getChangeFileNum',
            'changeRegistryNum' => 'getChangeRegistryNum',
            'hostName' => 'getHostName',
            'dataList' => 'getDataList'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['changeTotalNum'] = isset($data['changeTotalNum']) ? $data['changeTotalNum'] : null;
        $this->container['changeFileNum'] = isset($data['changeFileNum']) ? $data['changeFileNum'] : null;
        $this->container['changeRegistryNum'] = isset($data['changeRegistryNum']) ? $data['changeRegistryNum'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
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
    * Gets totalNum
    *  文件总条数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 文件总条数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets changeTotalNum
    *  变更总数
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
    * @param int|null $changeTotalNum 变更总数
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
    *  变更文件数量
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
    * @param int|null $changeFileNum 变更文件数量
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
    * Gets hostName
    *  服务器名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets dataList
    *  变更文件信息列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\FileHostEventDetailResponseInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\FileHostEventDetailResponseInfo[]|null $dataList 变更文件信息列表
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

