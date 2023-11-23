<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InspectionReports implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'inspectionReports';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  检查报告ID。
    * checkTime  检查时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * expirationTime  到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * targetVersion  目标版本。
    * result  检查结果。 success，表示成功。 failed，表示失败。 running， 表示检查中。
    * detail  检查报告详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'checkTime' => 'string',
            'expirationTime' => 'string',
            'targetVersion' => 'string',
            'result' => 'string',
            'detail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  检查报告ID。
    * checkTime  检查时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * expirationTime  到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * targetVersion  目标版本。
    * result  检查结果。 success，表示成功。 failed，表示失败。 running， 表示检查中。
    * detail  检查报告详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'checkTime' => null,
        'expirationTime' => null,
        'targetVersion' => null,
        'result' => null,
        'detail' => null
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
    * id  检查报告ID。
    * checkTime  检查时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * expirationTime  到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * targetVersion  目标版本。
    * result  检查结果。 success，表示成功。 failed，表示失败。 running， 表示检查中。
    * detail  检查报告详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'checkTime' => 'check_time',
            'expirationTime' => 'expiration_time',
            'targetVersion' => 'target_version',
            'result' => 'result',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  检查报告ID。
    * checkTime  检查时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * expirationTime  到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * targetVersion  目标版本。
    * result  检查结果。 success，表示成功。 failed，表示失败。 running， 表示检查中。
    * detail  检查报告详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'checkTime' => 'setCheckTime',
            'expirationTime' => 'setExpirationTime',
            'targetVersion' => 'setTargetVersion',
            'result' => 'setResult',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  检查报告ID。
    * checkTime  检查时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * expirationTime  到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * targetVersion  目标版本。
    * result  检查结果。 success，表示成功。 failed，表示失败。 running， 表示检查中。
    * detail  检查报告详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'checkTime' => 'getCheckTime',
            'expirationTime' => 'getExpirationTime',
            'targetVersion' => 'getTargetVersion',
            'result' => 'getResult',
            'detail' => 'getDetail'
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
        $this->container['checkTime'] = isset($data['checkTime']) ? $data['checkTime'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['checkTime'] === null) {
            $invalidProperties[] = "'checkTime' can't be null";
        }
        if ($this->container['expirationTime'] === null) {
            $invalidProperties[] = "'expirationTime' can't be null";
        }
        if ($this->container['targetVersion'] === null) {
            $invalidProperties[] = "'targetVersion' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
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
    * Gets id
    *  检查报告ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 检查报告ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets checkTime
    *  检查时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string
    */
    public function getCheckTime()
    {
        return $this->container['checkTime'];
    }

    /**
    * Sets checkTime
    *
    * @param string $checkTime 检查时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setCheckTime($checkTime)
    {
        $this->container['checkTime'] = $checkTime;
        return $this;
    }

    /**
    * Gets expirationTime
    *  到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param string $expirationTime 到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
        return $this;
    }

    /**
    * Gets targetVersion
    *  目标版本。
    *
    * @return string
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string $targetVersion 目标版本。
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets result
    *  检查结果。 success，表示成功。 failed，表示失败。 running， 表示检查中。
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 检查结果。 success，表示成功。 failed，表示失败。 running， 表示检查中。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets detail
    *  检查报告详情。
    *
    * @return string
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string $detail 检查报告详情。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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

