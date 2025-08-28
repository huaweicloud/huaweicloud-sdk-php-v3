<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSlowLogRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSlowLogRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  DDM实例ID。
    * curPage  分页参数：起始值 [大于等于1] 。
    * perPage  分页参数：每页多少条。
    * startDate  开始时间，UTC time，精确到毫秒。
    * endDate  结束时间，UTC time，精确到毫秒。结束时间与开始时间，间隔不能超过7天。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'curPage' => 'string',
            'perPage' => 'string',
            'startDate' => 'string',
            'endDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  DDM实例ID。
    * curPage  分页参数：起始值 [大于等于1] 。
    * perPage  分页参数：每页多少条。
    * startDate  开始时间，UTC time，精确到毫秒。
    * endDate  结束时间，UTC time，精确到毫秒。结束时间与开始时间，间隔不能超过7天。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'curPage' => null,
        'perPage' => null,
        'startDate' => null,
        'endDate' => null
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
    * instanceId  DDM实例ID。
    * curPage  分页参数：起始值 [大于等于1] 。
    * perPage  分页参数：每页多少条。
    * startDate  开始时间，UTC time，精确到毫秒。
    * endDate  结束时间，UTC time，精确到毫秒。结束时间与开始时间，间隔不能超过7天。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'curPage' => 'curPage',
            'perPage' => 'perPage',
            'startDate' => 'startDate',
            'endDate' => 'endDate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  DDM实例ID。
    * curPage  分页参数：起始值 [大于等于1] 。
    * perPage  分页参数：每页多少条。
    * startDate  开始时间，UTC time，精确到毫秒。
    * endDate  结束时间，UTC time，精确到毫秒。结束时间与开始时间，间隔不能超过7天。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'curPage' => 'setCurPage',
            'perPage' => 'setPerPage',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  DDM实例ID。
    * curPage  分页参数：起始值 [大于等于1] 。
    * perPage  分页参数：每页多少条。
    * startDate  开始时间，UTC time，精确到毫秒。
    * endDate  结束时间，UTC time，精确到毫秒。结束时间与开始时间，间隔不能超过7天。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'curPage' => 'getCurPage',
            'perPage' => 'getPerPage',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['curPage'] === null) {
            $invalidProperties[] = "'curPage' can't be null";
        }
        if ($this->container['perPage'] === null) {
            $invalidProperties[] = "'perPage' can't be null";
        }
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
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
    * Gets instanceId
    *  DDM实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId DDM实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets curPage
    *  分页参数：起始值 [大于等于1] 。
    *
    * @return string
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param string $curPage 分页参数：起始值 [大于等于1] 。
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
        return $this;
    }

    /**
    * Gets perPage
    *  分页参数：每页多少条。
    *
    * @return string
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param string $perPage 分页参数：每页多少条。
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
        return $this;
    }

    /**
    * Gets startDate
    *  开始时间，UTC time，精确到毫秒。
    *
    * @return string
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string $startDate 开始时间，UTC time，精确到毫秒。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  结束时间，UTC time，精确到毫秒。结束时间与开始时间，间隔不能超过7天。
    *
    * @return string
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string $endDate 结束时间，UTC time，精确到毫秒。结束时间与开始时间，间隔不能超过7天。
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
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

