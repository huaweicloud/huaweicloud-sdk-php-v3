<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  应用ID
    * appName  应用名称
    * vpcId  应用所属的VPC的ID
    * vpcName  应用所属的VPC的名称
    * subnetId  应用所属的VPC的子网iID
    * subnetName  应用所属的VPC的子网
    * domainId  账号ID
    * description  应用描述
    * createTime  应用的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'appName' => 'string',
            'vpcId' => 'string',
            'vpcName' => 'string',
            'subnetId' => 'string',
            'subnetName' => 'string',
            'domainId' => 'string',
            'description' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  应用ID
    * appName  应用名称
    * vpcId  应用所属的VPC的ID
    * vpcName  应用所属的VPC的名称
    * subnetId  应用所属的VPC的子网iID
    * subnetName  应用所属的VPC的子网
    * domainId  账号ID
    * description  应用描述
    * createTime  应用的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'appName' => null,
        'vpcId' => null,
        'vpcName' => null,
        'subnetId' => null,
        'subnetName' => null,
        'domainId' => null,
        'description' => null,
        'createTime' => 'int64'
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
    * appId  应用ID
    * appName  应用名称
    * vpcId  应用所属的VPC的ID
    * vpcName  应用所属的VPC的名称
    * subnetId  应用所属的VPC的子网iID
    * subnetName  应用所属的VPC的子网
    * domainId  账号ID
    * description  应用描述
    * createTime  应用的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'appName' => 'app_name',
            'vpcId' => 'vpc_id',
            'vpcName' => 'vpc_name',
            'subnetId' => 'subnet_id',
            'subnetName' => 'subnet_name',
            'domainId' => 'domain_id',
            'description' => 'description',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  应用ID
    * appName  应用名称
    * vpcId  应用所属的VPC的ID
    * vpcName  应用所属的VPC的名称
    * subnetId  应用所属的VPC的子网iID
    * subnetName  应用所属的VPC的子网
    * domainId  账号ID
    * description  应用描述
    * createTime  应用的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'vpcId' => 'setVpcId',
            'vpcName' => 'setVpcName',
            'subnetId' => 'setSubnetId',
            'subnetName' => 'setSubnetName',
            'domainId' => 'setDomainId',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  应用ID
    * appName  应用名称
    * vpcId  应用所属的VPC的ID
    * vpcName  应用所属的VPC的名称
    * subnetId  应用所属的VPC的子网iID
    * subnetName  应用所属的VPC的子网
    * domainId  账号ID
    * description  应用描述
    * createTime  应用的创建时间，UNIX时间戳，单位毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'vpcId' => 'getVpcId',
            'vpcName' => 'getVpcName',
            'subnetId' => 'getSubnetId',
            'subnetName' => 'getSubnetName',
            'domainId' => 'getDomainId',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['appId'] === null) {
            $invalidProperties[] = "'appId' can't be null";
        }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['vpcName'] === null) {
            $invalidProperties[] = "'vpcName' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['subnetName'] === null) {
            $invalidProperties[] = "'subnetName' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
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
    * Gets appId
    *  应用ID
    *
    * @return string
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string $appId 应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  应用名称
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName 应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets vpcId
    *  应用所属的VPC的ID
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 应用所属的VPC的ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets vpcName
    *  应用所属的VPC的名称
    *
    * @return string
    */
    public function getVpcName()
    {
        return $this->container['vpcName'];
    }

    /**
    * Sets vpcName
    *
    * @param string $vpcName 应用所属的VPC的名称
    *
    * @return $this
    */
    public function setVpcName($vpcName)
    {
        $this->container['vpcName'] = $vpcName;
        return $this;
    }

    /**
    * Gets subnetId
    *  应用所属的VPC的子网iID
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 应用所属的VPC的子网iID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets subnetName
    *  应用所属的VPC的子网
    *
    * @return string
    */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
    * Sets subnetName
    *
    * @param string $subnetName 应用所属的VPC的子网
    *
    * @return $this
    */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 账号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets description
    *  应用描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 应用描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  应用的创建时间，UNIX时间戳，单位毫秒
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 应用的创建时间，UNIX时间戳，单位毫秒
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

