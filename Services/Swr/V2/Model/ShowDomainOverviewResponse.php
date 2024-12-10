<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  租户ID
    * domainName  租户名称
    * namspaceNum  当前租户的命名空间个数
    * repoNum  当前租户的仓库个数
    * imageNum  当前租户的镜像个数
    * storeSpace  当前租户存储大小
    * downflowSize  当前租户下载流量大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'domainName' => 'string',
            'namspaceNum' => 'int',
            'repoNum' => 'int',
            'imageNum' => 'int',
            'storeSpace' => 'double',
            'downflowSize' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  租户ID
    * domainName  租户名称
    * namspaceNum  当前租户的命名空间个数
    * repoNum  当前租户的仓库个数
    * imageNum  当前租户的镜像个数
    * storeSpace  当前租户存储大小
    * downflowSize  当前租户下载流量大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'domainName' => null,
        'namspaceNum' => 'int64',
        'repoNum' => 'int64',
        'imageNum' => 'int64',
        'storeSpace' => 'double',
        'downflowSize' => 'double'
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
    * domainId  租户ID
    * domainName  租户名称
    * namspaceNum  当前租户的命名空间个数
    * repoNum  当前租户的仓库个数
    * imageNum  当前租户的镜像个数
    * storeSpace  当前租户存储大小
    * downflowSize  当前租户下载流量大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'namspaceNum' => 'namspace_num',
            'repoNum' => 'repo_num',
            'imageNum' => 'image_num',
            'storeSpace' => 'store_space',
            'downflowSize' => 'downflow_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  租户ID
    * domainName  租户名称
    * namspaceNum  当前租户的命名空间个数
    * repoNum  当前租户的仓库个数
    * imageNum  当前租户的镜像个数
    * storeSpace  当前租户存储大小
    * downflowSize  当前租户下载流量大小
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'namspaceNum' => 'setNamspaceNum',
            'repoNum' => 'setRepoNum',
            'imageNum' => 'setImageNum',
            'storeSpace' => 'setStoreSpace',
            'downflowSize' => 'setDownflowSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  租户ID
    * domainName  租户名称
    * namspaceNum  当前租户的命名空间个数
    * repoNum  当前租户的仓库个数
    * imageNum  当前租户的镜像个数
    * storeSpace  当前租户存储大小
    * downflowSize  当前租户下载流量大小
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'namspaceNum' => 'getNamspaceNum',
            'repoNum' => 'getRepoNum',
            'imageNum' => 'getImageNum',
            'storeSpace' => 'getStoreSpace',
            'downflowSize' => 'getDownflowSize'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['namspaceNum'] = isset($data['namspaceNum']) ? $data['namspaceNum'] : null;
        $this->container['repoNum'] = isset($data['repoNum']) ? $data['repoNum'] : null;
        $this->container['imageNum'] = isset($data['imageNum']) ? $data['imageNum'] : null;
        $this->container['storeSpace'] = isset($data['storeSpace']) ? $data['storeSpace'] : null;
        $this->container['downflowSize'] = isset($data['downflowSize']) ? $data['downflowSize'] : null;
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
    * Gets domainId
    *  租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  租户名称
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 租户名称
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets namspaceNum
    *  当前租户的命名空间个数
    *
    * @return int|null
    */
    public function getNamspaceNum()
    {
        return $this->container['namspaceNum'];
    }

    /**
    * Sets namspaceNum
    *
    * @param int|null $namspaceNum 当前租户的命名空间个数
    *
    * @return $this
    */
    public function setNamspaceNum($namspaceNum)
    {
        $this->container['namspaceNum'] = $namspaceNum;
        return $this;
    }

    /**
    * Gets repoNum
    *  当前租户的仓库个数
    *
    * @return int|null
    */
    public function getRepoNum()
    {
        return $this->container['repoNum'];
    }

    /**
    * Sets repoNum
    *
    * @param int|null $repoNum 当前租户的仓库个数
    *
    * @return $this
    */
    public function setRepoNum($repoNum)
    {
        $this->container['repoNum'] = $repoNum;
        return $this;
    }

    /**
    * Gets imageNum
    *  当前租户的镜像个数
    *
    * @return int|null
    */
    public function getImageNum()
    {
        return $this->container['imageNum'];
    }

    /**
    * Sets imageNum
    *
    * @param int|null $imageNum 当前租户的镜像个数
    *
    * @return $this
    */
    public function setImageNum($imageNum)
    {
        $this->container['imageNum'] = $imageNum;
        return $this;
    }

    /**
    * Gets storeSpace
    *  当前租户存储大小
    *
    * @return double|null
    */
    public function getStoreSpace()
    {
        return $this->container['storeSpace'];
    }

    /**
    * Sets storeSpace
    *
    * @param double|null $storeSpace 当前租户存储大小
    *
    * @return $this
    */
    public function setStoreSpace($storeSpace)
    {
        $this->container['storeSpace'] = $storeSpace;
        return $this;
    }

    /**
    * Gets downflowSize
    *  当前租户下载流量大小
    *
    * @return double|null
    */
    public function getDownflowSize()
    {
        return $this->container['downflowSize'];
    }

    /**
    * Sets downflowSize
    *
    * @param double|null $downflowSize 当前租户下载流量大小
    *
    * @return $this
    */
    public function setDownflowSize($downflowSize)
    {
        $this->container['downflowSize'] = $downflowSize;
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

