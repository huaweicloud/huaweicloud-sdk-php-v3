<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAuditQuotaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAuditQuotaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * auditQuota  实例当前剩余配额。
    * cpu  Cpu当前剩余配额。
    * projectId  项目Id。
    * quota  配额。
    * ram  内存当前剩余配额
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'auditQuota' => 'int',
            'cpu' => 'int',
            'projectId' => 'string',
            'quota' => 'int',
            'ram' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * auditQuota  实例当前剩余配额。
    * cpu  Cpu当前剩余配额。
    * projectId  项目Id。
    * quota  配额。
    * ram  内存当前剩余配额
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'auditQuota' => 'int64',
        'cpu' => 'int64',
        'projectId' => null,
        'quota' => 'int64',
        'ram' => 'int64'
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
    * auditQuota  实例当前剩余配额。
    * cpu  Cpu当前剩余配额。
    * projectId  项目Id。
    * quota  配额。
    * ram  内存当前剩余配额
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'auditQuota' => 'audit_quota',
            'cpu' => 'cpu',
            'projectId' => 'project_id',
            'quota' => 'quota',
            'ram' => 'ram'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * auditQuota  实例当前剩余配额。
    * cpu  Cpu当前剩余配额。
    * projectId  项目Id。
    * quota  配额。
    * ram  内存当前剩余配额
    *
    * @var string[]
    */
    protected static $setters = [
            'auditQuota' => 'setAuditQuota',
            'cpu' => 'setCpu',
            'projectId' => 'setProjectId',
            'quota' => 'setQuota',
            'ram' => 'setRam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * auditQuota  实例当前剩余配额。
    * cpu  Cpu当前剩余配额。
    * projectId  项目Id。
    * quota  配额。
    * ram  内存当前剩余配额
    *
    * @var string[]
    */
    protected static $getters = [
            'auditQuota' => 'getAuditQuota',
            'cpu' => 'getCpu',
            'projectId' => 'getProjectId',
            'quota' => 'getQuota',
            'ram' => 'getRam'
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
        $this->container['auditQuota'] = isset($data['auditQuota']) ? $data['auditQuota'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets auditQuota
    *  实例当前剩余配额。
    *
    * @return int|null
    */
    public function getAuditQuota()
    {
        return $this->container['auditQuota'];
    }

    /**
    * Sets auditQuota
    *
    * @param int|null $auditQuota 实例当前剩余配额。
    *
    * @return $this
    */
    public function setAuditQuota($auditQuota)
    {
        $this->container['auditQuota'] = $auditQuota;
        return $this;
    }

    /**
    * Gets cpu
    *  Cpu当前剩余配额。
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu Cpu当前剩余配额。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets projectId
    *  项目Id。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目Id。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets quota
    *  配额。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota 配额。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets ram
    *  内存当前剩余配额
    *
    * @return int|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param int|null $ram 内存当前剩余配额
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
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

