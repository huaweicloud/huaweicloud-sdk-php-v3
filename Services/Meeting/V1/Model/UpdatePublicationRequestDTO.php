<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePublicationRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePublicationRequestDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishName  发布名称。
    * startTime  开始时间。
    * endTime  结束时间。
    * deptList  发布到部门编码列表。
    * deviceList  发布到设备用户ID列表。
    * programList  发布节目ID列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishName' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'deptList' => 'string[]',
            'deviceList' => 'string[]',
            'programList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishName  发布名称。
    * startTime  开始时间。
    * endTime  结束时间。
    * deptList  发布到部门编码列表。
    * deviceList  发布到设备用户ID列表。
    * programList  发布节目ID列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishName' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'deptList' => null,
        'deviceList' => null,
        'programList' => null
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
    * publishName  发布名称。
    * startTime  开始时间。
    * endTime  结束时间。
    * deptList  发布到部门编码列表。
    * deviceList  发布到设备用户ID列表。
    * programList  发布节目ID列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishName' => 'publishName',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'deptList' => 'deptList',
            'deviceList' => 'deviceList',
            'programList' => 'programList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishName  发布名称。
    * startTime  开始时间。
    * endTime  结束时间。
    * deptList  发布到部门编码列表。
    * deviceList  发布到设备用户ID列表。
    * programList  发布节目ID列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'publishName' => 'setPublishName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'deptList' => 'setDeptList',
            'deviceList' => 'setDeviceList',
            'programList' => 'setProgramList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishName  发布名称。
    * startTime  开始时间。
    * endTime  结束时间。
    * deptList  发布到部门编码列表。
    * deviceList  发布到设备用户ID列表。
    * programList  发布节目ID列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'publishName' => 'getPublishName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'deptList' => 'getDeptList',
            'deviceList' => 'getDeviceList',
            'programList' => 'getProgramList'
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
        $this->container['publishName'] = isset($data['publishName']) ? $data['publishName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['deptList'] = isset($data['deptList']) ? $data['deptList'] : null;
        $this->container['deviceList'] = isset($data['deviceList']) ? $data['deviceList'] : null;
        $this->container['programList'] = isset($data['programList']) ? $data['programList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publishName'] === null) {
            $invalidProperties[] = "'publishName' can't be null";
        }
            if ((mb_strlen($this->container['publishName']) > 96)) {
                $invalidProperties[] = "invalid value for 'publishName', the character length must be smaller than or equal to 96.";
            }
            if ((mb_strlen($this->container['publishName']) < 1)) {
                $invalidProperties[] = "invalid value for 'publishName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4E00-\\u9FA5A-Za-z0-9\\-_(). ]+$/", $this->container['publishName'])) {
                $invalidProperties[] = "invalid value for 'publishName', must be conform to the pattern /^[\\u4E00-\\u9FA5A-Za-z0-9\\-_(). ]+$/.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['deptList'] === null) {
            $invalidProperties[] = "'deptList' can't be null";
        }
        if ($this->container['deviceList'] === null) {
            $invalidProperties[] = "'deviceList' can't be null";
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
    * Gets publishName
    *  发布名称。
    *
    * @return string
    */
    public function getPublishName()
    {
        return $this->container['publishName'];
    }

    /**
    * Sets publishName
    *
    * @param string $publishName 发布名称。
    *
    * @return $this
    */
    public function setPublishName($publishName)
    {
        $this->container['publishName'] = $publishName;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间。
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets deptList
    *  发布到部门编码列表。
    *
    * @return string[]
    */
    public function getDeptList()
    {
        return $this->container['deptList'];
    }

    /**
    * Sets deptList
    *
    * @param string[] $deptList 发布到部门编码列表。
    *
    * @return $this
    */
    public function setDeptList($deptList)
    {
        $this->container['deptList'] = $deptList;
        return $this;
    }

    /**
    * Gets deviceList
    *  发布到设备用户ID列表。
    *
    * @return string[]
    */
    public function getDeviceList()
    {
        return $this->container['deviceList'];
    }

    /**
    * Sets deviceList
    *
    * @param string[] $deviceList 发布到设备用户ID列表。
    *
    * @return $this
    */
    public function setDeviceList($deviceList)
    {
        $this->container['deviceList'] = $deviceList;
        return $this;
    }

    /**
    * Gets programList
    *  发布节目ID列表。
    *
    * @return string[]|null
    */
    public function getProgramList()
    {
        return $this->container['programList'];
    }

    /**
    * Sets programList
    *
    * @param string[]|null $programList 发布节目ID列表。
    *
    * @return $this
    */
    public function setProgramList($programList)
    {
        $this->container['programList'] = $programList;
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

