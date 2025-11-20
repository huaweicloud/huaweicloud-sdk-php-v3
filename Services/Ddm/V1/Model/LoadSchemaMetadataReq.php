<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadSchemaMetadataReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadSchemaMetadataReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compressedDatabasesInfo  逻辑库信息。
    * dnInstance  关联的后端DN信息。
    * instanceId  实例id。
    * projectId  项目id。
    * iamAccount  iamAccount
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compressedDatabasesInfo' => 'string',
            'dnInstance' => '\HuaweiCloud\SDK\Ddm\V1\Model\DNInstance[]',
            'instanceId' => 'string',
            'projectId' => 'string',
            'iamAccount' => '\HuaweiCloud\SDK\Ddm\V1\Model\IamAccount'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compressedDatabasesInfo  逻辑库信息。
    * dnInstance  关联的后端DN信息。
    * instanceId  实例id。
    * projectId  项目id。
    * iamAccount  iamAccount
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compressedDatabasesInfo' => null,
        'dnInstance' => null,
        'instanceId' => null,
        'projectId' => null,
        'iamAccount' => null
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
    * compressedDatabasesInfo  逻辑库信息。
    * dnInstance  关联的后端DN信息。
    * instanceId  实例id。
    * projectId  项目id。
    * iamAccount  iamAccount
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compressedDatabasesInfo' => 'compressed_databases_info',
            'dnInstance' => 'dn_instance',
            'instanceId' => 'instance_id',
            'projectId' => 'project_id',
            'iamAccount' => 'iam_account'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compressedDatabasesInfo  逻辑库信息。
    * dnInstance  关联的后端DN信息。
    * instanceId  实例id。
    * projectId  项目id。
    * iamAccount  iamAccount
    *
    * @var string[]
    */
    protected static $setters = [
            'compressedDatabasesInfo' => 'setCompressedDatabasesInfo',
            'dnInstance' => 'setDnInstance',
            'instanceId' => 'setInstanceId',
            'projectId' => 'setProjectId',
            'iamAccount' => 'setIamAccount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compressedDatabasesInfo  逻辑库信息。
    * dnInstance  关联的后端DN信息。
    * instanceId  实例id。
    * projectId  项目id。
    * iamAccount  iamAccount
    *
    * @var string[]
    */
    protected static $getters = [
            'compressedDatabasesInfo' => 'getCompressedDatabasesInfo',
            'dnInstance' => 'getDnInstance',
            'instanceId' => 'getInstanceId',
            'projectId' => 'getProjectId',
            'iamAccount' => 'getIamAccount'
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
        $this->container['compressedDatabasesInfo'] = isset($data['compressedDatabasesInfo']) ? $data['compressedDatabasesInfo'] : null;
        $this->container['dnInstance'] = isset($data['dnInstance']) ? $data['dnInstance'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['iamAccount'] = isset($data['iamAccount']) ? $data['iamAccount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['compressedDatabasesInfo']) && (mb_strlen($this->container['compressedDatabasesInfo']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'compressedDatabasesInfo', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['compressedDatabasesInfo']) && (mb_strlen($this->container['compressedDatabasesInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'compressedDatabasesInfo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
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
    * Gets compressedDatabasesInfo
    *  逻辑库信息。
    *
    * @return string|null
    */
    public function getCompressedDatabasesInfo()
    {
        return $this->container['compressedDatabasesInfo'];
    }

    /**
    * Sets compressedDatabasesInfo
    *
    * @param string|null $compressedDatabasesInfo 逻辑库信息。
    *
    * @return $this
    */
    public function setCompressedDatabasesInfo($compressedDatabasesInfo)
    {
        $this->container['compressedDatabasesInfo'] = $compressedDatabasesInfo;
        return $this;
    }

    /**
    * Gets dnInstance
    *  关联的后端DN信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\DNInstance[]|null
    */
    public function getDnInstance()
    {
        return $this->container['dnInstance'];
    }

    /**
    * Sets dnInstance
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\DNInstance[]|null $dnInstance 关联的后端DN信息。
    *
    * @return $this
    */
    public function setDnInstance($dnInstance)
    {
        $this->container['dnInstance'] = $dnInstance;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id。
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
    * @param string|null $projectId 项目id。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets iamAccount
    *  iamAccount
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\IamAccount|null
    */
    public function getIamAccount()
    {
        return $this->container['iamAccount'];
    }

    /**
    * Sets iamAccount
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\IamAccount|null $iamAccount iamAccount
    *
    * @return $this
    */
    public function setIamAccount($iamAccount)
    {
        $this->container['iamAccount'] = $iamAccount;
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

