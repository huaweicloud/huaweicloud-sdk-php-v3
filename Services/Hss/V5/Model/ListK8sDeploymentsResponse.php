<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListK8sDeploymentsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListK8sDeploymentsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  deployment实例总数
    * lastUpdateTime  最近更新时间
    * type  资源类型，包含如下四种。   - deploy ：无状态负载   - sts ：有状态负载   - job ： 普通任务   - cronjob ：定时任务
    * resourcesInfoList  resources基本信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'lastUpdateTime' => 'int',
            'type' => 'string',
            'resourcesInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\ServerlessDeploymentInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  deployment实例总数
    * lastUpdateTime  最近更新时间
    * type  资源类型，包含如下四种。   - deploy ：无状态负载   - sts ：有状态负载   - job ： 普通任务   - cronjob ：定时任务
    * resourcesInfoList  resources基本信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int64',
        'lastUpdateTime' => 'int64',
        'type' => null,
        'resourcesInfoList' => null
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
    * totalNum  deployment实例总数
    * lastUpdateTime  最近更新时间
    * type  资源类型，包含如下四种。   - deploy ：无状态负载   - sts ：有状态负载   - job ： 普通任务   - cronjob ：定时任务
    * resourcesInfoList  resources基本信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'lastUpdateTime' => 'last_update_time',
            'type' => 'type',
            'resourcesInfoList' => 'resources_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  deployment实例总数
    * lastUpdateTime  最近更新时间
    * type  资源类型，包含如下四种。   - deploy ：无状态负载   - sts ：有状态负载   - job ： 普通任务   - cronjob ：定时任务
    * resourcesInfoList  resources基本信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'lastUpdateTime' => 'setLastUpdateTime',
            'type' => 'setType',
            'resourcesInfoList' => 'setResourcesInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  deployment实例总数
    * lastUpdateTime  最近更新时间
    * type  资源类型，包含如下四种。   - deploy ：无状态负载   - sts ：有状态负载   - job ： 普通任务   - cronjob ：定时任务
    * resourcesInfoList  resources基本信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'lastUpdateTime' => 'getLastUpdateTime',
            'type' => 'getType',
            'resourcesInfoList' => 'getResourcesInfoList'
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
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['resourcesInfoList'] = isset($data['resourcesInfoList']) ? $data['resourcesInfoList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
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
    *  deployment实例总数
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
    * @param int|null $totalNum deployment实例总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最近更新时间
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime 最近更新时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets type
    *  资源类型，包含如下四种。   - deploy ：无状态负载   - sts ：有状态负载   - job ： 普通任务   - cronjob ：定时任务
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 资源类型，包含如下四种。   - deploy ：无状态负载   - sts ：有状态负载   - job ： 普通任务   - cronjob ：定时任务
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets resourcesInfoList
    *  resources基本信息列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ServerlessDeploymentInfo[]|null
    */
    public function getResourcesInfoList()
    {
        return $this->container['resourcesInfoList'];
    }

    /**
    * Sets resourcesInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ServerlessDeploymentInfo[]|null $resourcesInfoList resources基本信息列表
    *
    * @return $this
    */
    public function setResourcesInfoList($resourcesInfoList)
    {
        $this->container['resourcesInfoList'] = $resourcesInfoList;
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

