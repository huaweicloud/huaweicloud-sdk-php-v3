<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceQuotasInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceQuotasInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * totalNum  总配额数
    * usedNum  已使用配额数
    * availableNum  可用总配额数
    * availableResourcesList  可用资源列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'totalNum' => 'int',
            'usedNum' => 'int',
            'availableNum' => 'int',
            'availableResourcesList' => '\HuaweiCloud\SDK\Hss\V5\Model\AvailableResourceIdsInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * totalNum  总配额数
    * usedNum  已使用配额数
    * availableNum  可用总配额数
    * availableResourcesList  可用资源列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'totalNum' => 'int32',
        'usedNum' => 'int32',
        'availableNum' => 'int32',
        'availableResourcesList' => null
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
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * totalNum  总配额数
    * usedNum  已使用配额数
    * availableNum  可用总配额数
    * availableResourcesList  可用资源列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'totalNum' => 'total_num',
            'usedNum' => 'used_num',
            'availableNum' => 'available_num',
            'availableResourcesList' => 'available_resources_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * totalNum  总配额数
    * usedNum  已使用配额数
    * availableNum  可用总配额数
    * availableResourcesList  可用资源列表
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'totalNum' => 'setTotalNum',
            'usedNum' => 'setUsedNum',
            'availableNum' => 'setAvailableNum',
            'availableResourcesList' => 'setAvailableResourcesList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * totalNum  总配额数
    * usedNum  已使用配额数
    * availableNum  可用总配额数
    * availableResourcesList  可用资源列表
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'totalNum' => 'getTotalNum',
            'usedNum' => 'getUsedNum',
            'availableNum' => 'getAvailableNum',
            'availableResourcesList' => 'getAvailableResourcesList'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['usedNum'] = isset($data['usedNum']) ? $data['usedNum'] : null;
        $this->container['availableNum'] = isset($data['availableNum']) ? $data['availableNum'] : null;
        $this->container['availableResourcesList'] = isset($data['availableResourcesList']) ? $data['availableResourcesList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usedNum']) && ($this->container['usedNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'usedNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['usedNum']) && ($this->container['usedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'usedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['availableNum']) && ($this->container['availableNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'availableNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['availableNum']) && ($this->container['availableNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'availableNum', must be bigger than or equal to 0.";
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
    * Gets version
    *  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets totalNum
    *  总配额数
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
    * @param int|null $totalNum 总配额数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets usedNum
    *  已使用配额数
    *
    * @return int|null
    */
    public function getUsedNum()
    {
        return $this->container['usedNum'];
    }

    /**
    * Sets usedNum
    *
    * @param int|null $usedNum 已使用配额数
    *
    * @return $this
    */
    public function setUsedNum($usedNum)
    {
        $this->container['usedNum'] = $usedNum;
        return $this;
    }

    /**
    * Gets availableNum
    *  可用总配额数
    *
    * @return int|null
    */
    public function getAvailableNum()
    {
        return $this->container['availableNum'];
    }

    /**
    * Sets availableNum
    *
    * @param int|null $availableNum 可用总配额数
    *
    * @return $this
    */
    public function setAvailableNum($availableNum)
    {
        $this->container['availableNum'] = $availableNum;
        return $this;
    }

    /**
    * Gets availableResourcesList
    *  可用资源列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AvailableResourceIdsInfo[]|null
    */
    public function getAvailableResourcesList()
    {
        return $this->container['availableResourcesList'];
    }

    /**
    * Sets availableResourcesList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AvailableResourceIdsInfo[]|null $availableResourcesList 可用资源列表
    *
    * @return $this
    */
    public function setAvailableResourcesList($availableResourcesList)
    {
        $this->container['availableResourcesList'] = $availableResourcesList;
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

