<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAuditQuotaNewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAuditQuotaNewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID。
    * auditQuota  审计实例剩余配额。
    * cpu  CPU剩余配额。
    * ram  内存剩余配额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'auditQuota' => 'int',
            'cpu' => 'int',
            'ram' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID。
    * auditQuota  审计实例剩余配额。
    * cpu  CPU剩余配额。
    * ram  内存剩余配额。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'auditQuota' => 'int64',
        'cpu' => 'int64',
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
    * projectId  项目ID。
    * auditQuota  审计实例剩余配额。
    * cpu  CPU剩余配额。
    * ram  内存剩余配额。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'auditQuota' => 'audit_quota',
            'cpu' => 'cpu',
            'ram' => 'ram'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID。
    * auditQuota  审计实例剩余配额。
    * cpu  CPU剩余配额。
    * ram  内存剩余配额。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'auditQuota' => 'setAuditQuota',
            'cpu' => 'setCpu',
            'ram' => 'setRam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID。
    * auditQuota  审计实例剩余配额。
    * cpu  CPU剩余配额。
    * ram  内存剩余配额。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'auditQuota' => 'getAuditQuota',
            'cpu' => 'getCpu',
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['auditQuota'] = isset($data['auditQuota']) ? $data['auditQuota'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
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
    * Gets projectId
    *  项目ID。
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
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets auditQuota
    *  审计实例剩余配额。
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
    * @param int|null $auditQuota 审计实例剩余配额。
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
    *  CPU剩余配额。
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
    * @param int|null $cpu CPU剩余配额。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets ram
    *  内存剩余配额。
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
    * @param int|null $ram 内存剩余配额。
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

