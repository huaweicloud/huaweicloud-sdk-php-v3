<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyPwdEndPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyPwdEndPoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbPassword  数据库密码
    * endPointType  类型，so：源库；ta：目标库。
    * jobId  任务id
    * kerberos  kerberos
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbPassword' => 'string',
            'endPointType' => 'string',
            'jobId' => 'string',
            'kerberos' => '\HuaweiCloud\SDK\Drs\V3\Model\KerberosVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbPassword  数据库密码
    * endPointType  类型，so：源库；ta：目标库。
    * jobId  任务id
    * kerberos  kerberos
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbPassword' => null,
        'endPointType' => null,
        'jobId' => null,
        'kerberos' => null
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
    * dbPassword  数据库密码
    * endPointType  类型，so：源库；ta：目标库。
    * jobId  任务id
    * kerberos  kerberos
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbPassword' => 'db_password',
            'endPointType' => 'end_point_type',
            'jobId' => 'job_id',
            'kerberos' => 'kerberos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbPassword  数据库密码
    * endPointType  类型，so：源库；ta：目标库。
    * jobId  任务id
    * kerberos  kerberos
    *
    * @var string[]
    */
    protected static $setters = [
            'dbPassword' => 'setDbPassword',
            'endPointType' => 'setEndPointType',
            'jobId' => 'setJobId',
            'kerberos' => 'setKerberos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbPassword  数据库密码
    * endPointType  类型，so：源库；ta：目标库。
    * jobId  任务id
    * kerberos  kerberos
    *
    * @var string[]
    */
    protected static $getters = [
            'dbPassword' => 'getDbPassword',
            'endPointType' => 'getEndPointType',
            'jobId' => 'getJobId',
            'kerberos' => 'getKerberos'
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
    const END_POINT_TYPE_SO = 'so';
    const END_POINT_TYPE_TA = 'ta';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEndPointTypeAllowableValues()
    {
        return [
            self::END_POINT_TYPE_SO,
            self::END_POINT_TYPE_TA,
        ];
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
        $this->container['dbPassword'] = isset($data['dbPassword']) ? $data['dbPassword'] : null;
        $this->container['endPointType'] = isset($data['endPointType']) ? $data['endPointType'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['kerberos'] = isset($data['kerberos']) ? $data['kerberos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbPassword'] === null) {
            $invalidProperties[] = "'dbPassword' can't be null";
        }
            if (!preg_match("/^[-a-zA-Z0-9~!@#$%^&*_+=?\\\\.]{1,256}$/", $this->container['dbPassword'])) {
                $invalidProperties[] = "invalid value for 'dbPassword', must be conform to the pattern /^[-a-zA-Z0-9~!@#$%^&*_+=?\\\\.]{1,256}$/.";
            }
        if ($this->container['endPointType'] === null) {
            $invalidProperties[] = "'endPointType' can't be null";
        }
            $allowedValues = $this->getEndPointTypeAllowableValues();
                if (!is_null($this->container['endPointType']) && !in_array($this->container['endPointType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'endPointType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['jobId'])) {
                $invalidProperties[] = "invalid value for 'jobId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets dbPassword
    *  数据库密码
    *
    * @return string
    */
    public function getDbPassword()
    {
        return $this->container['dbPassword'];
    }

    /**
    * Sets dbPassword
    *
    * @param string $dbPassword 数据库密码
    *
    * @return $this
    */
    public function setDbPassword($dbPassword)
    {
        $this->container['dbPassword'] = $dbPassword;
        return $this;
    }

    /**
    * Gets endPointType
    *  类型，so：源库；ta：目标库。
    *
    * @return string
    */
    public function getEndPointType()
    {
        return $this->container['endPointType'];
    }

    /**
    * Sets endPointType
    *
    * @param string $endPointType 类型，so：源库；ta：目标库。
    *
    * @return $this
    */
    public function setEndPointType($endPointType)
    {
        $this->container['endPointType'] = $endPointType;
        return $this;
    }

    /**
    * Gets jobId
    *  任务id
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets kerberos
    *  kerberos
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\KerberosVO|null
    */
    public function getKerberos()
    {
        return $this->container['kerberos'];
    }

    /**
    * Sets kerberos
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\KerberosVO|null $kerberos kerberos
    *
    * @return $this
    */
    public function setKerberos($kerberos)
    {
        $this->container['kerberos'] = $kerberos;
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

