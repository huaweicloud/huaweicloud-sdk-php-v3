<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessoryListAccessories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessoryList_accessories';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  附件编号
    * domainId  附件所属的租户ID
    * namespaceName  附件所属的组织
    * repoName  附件所属的仓库
    * sigTag  附件镜像的版本
    * sigDigest  附件镜像的hash值
    * targetDigest  附件关联镜像的hash值
    * size  附件镜像的大小
    * type  附件的类型
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'domainId' => 'string',
            'namespaceName' => 'string',
            'repoName' => 'string',
            'sigTag' => 'string',
            'sigDigest' => 'string',
            'targetDigest' => 'string',
            'size' => 'int',
            'type' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  附件编号
    * domainId  附件所属的租户ID
    * namespaceName  附件所属的组织
    * repoName  附件所属的仓库
    * sigTag  附件镜像的版本
    * sigDigest  附件镜像的hash值
    * targetDigest  附件关联镜像的hash值
    * size  附件镜像的大小
    * type  附件的类型
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'domainId' => null,
        'namespaceName' => null,
        'repoName' => null,
        'sigTag' => null,
        'sigDigest' => null,
        'targetDigest' => null,
        'size' => 'int64',
        'type' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  附件编号
    * domainId  附件所属的租户ID
    * namespaceName  附件所属的组织
    * repoName  附件所属的仓库
    * sigTag  附件镜像的版本
    * sigDigest  附件镜像的hash值
    * targetDigest  附件关联镜像的hash值
    * size  附件镜像的大小
    * type  附件的类型
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domain_id',
            'namespaceName' => 'namespace_name',
            'repoName' => 'repo_name',
            'sigTag' => 'sig_tag',
            'sigDigest' => 'sig_digest',
            'targetDigest' => 'target_digest',
            'size' => 'size',
            'type' => 'type',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  附件编号
    * domainId  附件所属的租户ID
    * namespaceName  附件所属的组织
    * repoName  附件所属的仓库
    * sigTag  附件镜像的版本
    * sigDigest  附件镜像的hash值
    * targetDigest  附件关联镜像的hash值
    * size  附件镜像的大小
    * type  附件的类型
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'namespaceName' => 'setNamespaceName',
            'repoName' => 'setRepoName',
            'sigTag' => 'setSigTag',
            'sigDigest' => 'setSigDigest',
            'targetDigest' => 'setTargetDigest',
            'size' => 'setSize',
            'type' => 'setType',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  附件编号
    * domainId  附件所属的租户ID
    * namespaceName  附件所属的组织
    * repoName  附件所属的仓库
    * sigTag  附件镜像的版本
    * sigDigest  附件镜像的hash值
    * targetDigest  附件关联镜像的hash值
    * size  附件镜像的大小
    * type  附件的类型
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'namespaceName' => 'getNamespaceName',
            'repoName' => 'getRepoName',
            'sigTag' => 'getSigTag',
            'sigDigest' => 'getSigDigest',
            'targetDigest' => 'getTargetDigest',
            'size' => 'getSize',
            'type' => 'getType',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['sigTag'] = isset($data['sigTag']) ? $data['sigTag'] : null;
        $this->container['sigDigest'] = isset($data['sigDigest']) ? $data['sigDigest'] : null;
        $this->container['targetDigest'] = isset($data['targetDigest']) ? $data['targetDigest'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets id
    *  附件编号
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 附件编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  附件所属的租户ID
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
    * @param string|null $domainId 附件所属的租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets namespaceName
    *  附件所属的组织
    *
    * @return string|null
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string|null $namespaceName 附件所属的组织
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets repoName
    *  附件所属的仓库
    *
    * @return string|null
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string|null $repoName 附件所属的仓库
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets sigTag
    *  附件镜像的版本
    *
    * @return string|null
    */
    public function getSigTag()
    {
        return $this->container['sigTag'];
    }

    /**
    * Sets sigTag
    *
    * @param string|null $sigTag 附件镜像的版本
    *
    * @return $this
    */
    public function setSigTag($sigTag)
    {
        $this->container['sigTag'] = $sigTag;
        return $this;
    }

    /**
    * Gets sigDigest
    *  附件镜像的hash值
    *
    * @return string|null
    */
    public function getSigDigest()
    {
        return $this->container['sigDigest'];
    }

    /**
    * Sets sigDigest
    *
    * @param string|null $sigDigest 附件镜像的hash值
    *
    * @return $this
    */
    public function setSigDigest($sigDigest)
    {
        $this->container['sigDigest'] = $sigDigest;
        return $this;
    }

    /**
    * Gets targetDigest
    *  附件关联镜像的hash值
    *
    * @return string|null
    */
    public function getTargetDigest()
    {
        return $this->container['targetDigest'];
    }

    /**
    * Sets targetDigest
    *
    * @param string|null $targetDigest 附件关联镜像的hash值
    *
    * @return $this
    */
    public function setTargetDigest($targetDigest)
    {
        $this->container['targetDigest'] = $targetDigest;
        return $this;
    }

    /**
    * Gets size
    *  附件镜像的大小
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 附件镜像的大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets type
    *  附件的类型
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
    * @param string|null $type 附件的类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

