<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectSimpleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectSimpleDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  项目id
    * description  项目描述
    * name  项目名称
    * nameWithNamespace  项目名称
    * path  项目路径
    * pathWithNamespace  项目路径
    * developMode  开发模式
    * createdAt  创建时间
    * updatedAt  更新时间
    * archived  是否归档
    * isKia  是否为kia仓
    * sshUrlToRepo  项目url
    * httpUrlToRepo  项目url
    * webUrl  项目url
    * readmeUrl  项目readme url
    * productId  product id
    * productName  product name
    * memberMgntMode  member mgnt mode
    * visibility  visibility
    * namespace  namespace
    * repoType  项目类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'description' => 'string',
            'name' => 'string',
            'nameWithNamespace' => 'string',
            'path' => 'string',
            'pathWithNamespace' => 'string',
            'developMode' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'archived' => 'bool',
            'isKia' => 'bool',
            'sshUrlToRepo' => 'string',
            'httpUrlToRepo' => 'string',
            'webUrl' => 'string',
            'readmeUrl' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'memberMgntMode' => 'int',
            'visibility' => 'string',
            'namespace' => '\HuaweiCloud\SDK\CodeHub\V3\Model\NamespaceBasicDto',
            'repoType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  项目id
    * description  项目描述
    * name  项目名称
    * nameWithNamespace  项目名称
    * path  项目路径
    * pathWithNamespace  项目路径
    * developMode  开发模式
    * createdAt  创建时间
    * updatedAt  更新时间
    * archived  是否归档
    * isKia  是否为kia仓
    * sshUrlToRepo  项目url
    * httpUrlToRepo  项目url
    * webUrl  项目url
    * readmeUrl  项目readme url
    * productId  product id
    * productName  product name
    * memberMgntMode  member mgnt mode
    * visibility  visibility
    * namespace  namespace
    * repoType  项目类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'name' => null,
        'nameWithNamespace' => null,
        'path' => null,
        'pathWithNamespace' => null,
        'developMode' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'archived' => null,
        'isKia' => null,
        'sshUrlToRepo' => null,
        'httpUrlToRepo' => null,
        'webUrl' => null,
        'readmeUrl' => null,
        'productId' => null,
        'productName' => null,
        'memberMgntMode' => null,
        'visibility' => null,
        'namespace' => null,
        'repoType' => null
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
    * id  项目id
    * description  项目描述
    * name  项目名称
    * nameWithNamespace  项目名称
    * path  项目路径
    * pathWithNamespace  项目路径
    * developMode  开发模式
    * createdAt  创建时间
    * updatedAt  更新时间
    * archived  是否归档
    * isKia  是否为kia仓
    * sshUrlToRepo  项目url
    * httpUrlToRepo  项目url
    * webUrl  项目url
    * readmeUrl  项目readme url
    * productId  product id
    * productName  product name
    * memberMgntMode  member mgnt mode
    * visibility  visibility
    * namespace  namespace
    * repoType  项目类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'name' => 'name',
            'nameWithNamespace' => 'name_with_namespace',
            'path' => 'path',
            'pathWithNamespace' => 'path_with_namespace',
            'developMode' => 'develop_mode',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'archived' => 'archived',
            'isKia' => 'is_kia',
            'sshUrlToRepo' => 'ssh_url_to_repo',
            'httpUrlToRepo' => 'http_url_to_repo',
            'webUrl' => 'web_url',
            'readmeUrl' => 'readme_url',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'memberMgntMode' => 'member_mgnt_mode',
            'visibility' => 'visibility',
            'namespace' => 'namespace',
            'repoType' => 'repo_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  项目id
    * description  项目描述
    * name  项目名称
    * nameWithNamespace  项目名称
    * path  项目路径
    * pathWithNamespace  项目路径
    * developMode  开发模式
    * createdAt  创建时间
    * updatedAt  更新时间
    * archived  是否归档
    * isKia  是否为kia仓
    * sshUrlToRepo  项目url
    * httpUrlToRepo  项目url
    * webUrl  项目url
    * readmeUrl  项目readme url
    * productId  product id
    * productName  product name
    * memberMgntMode  member mgnt mode
    * visibility  visibility
    * namespace  namespace
    * repoType  项目类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'name' => 'setName',
            'nameWithNamespace' => 'setNameWithNamespace',
            'path' => 'setPath',
            'pathWithNamespace' => 'setPathWithNamespace',
            'developMode' => 'setDevelopMode',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'archived' => 'setArchived',
            'isKia' => 'setIsKia',
            'sshUrlToRepo' => 'setSshUrlToRepo',
            'httpUrlToRepo' => 'setHttpUrlToRepo',
            'webUrl' => 'setWebUrl',
            'readmeUrl' => 'setReadmeUrl',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'memberMgntMode' => 'setMemberMgntMode',
            'visibility' => 'setVisibility',
            'namespace' => 'setNamespace',
            'repoType' => 'setRepoType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  项目id
    * description  项目描述
    * name  项目名称
    * nameWithNamespace  项目名称
    * path  项目路径
    * pathWithNamespace  项目路径
    * developMode  开发模式
    * createdAt  创建时间
    * updatedAt  更新时间
    * archived  是否归档
    * isKia  是否为kia仓
    * sshUrlToRepo  项目url
    * httpUrlToRepo  项目url
    * webUrl  项目url
    * readmeUrl  项目readme url
    * productId  product id
    * productName  product name
    * memberMgntMode  member mgnt mode
    * visibility  visibility
    * namespace  namespace
    * repoType  项目类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'name' => 'getName',
            'nameWithNamespace' => 'getNameWithNamespace',
            'path' => 'getPath',
            'pathWithNamespace' => 'getPathWithNamespace',
            'developMode' => 'getDevelopMode',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'archived' => 'getArchived',
            'isKia' => 'getIsKia',
            'sshUrlToRepo' => 'getSshUrlToRepo',
            'httpUrlToRepo' => 'getHttpUrlToRepo',
            'webUrl' => 'getWebUrl',
            'readmeUrl' => 'getReadmeUrl',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'memberMgntMode' => 'getMemberMgntMode',
            'visibility' => 'getVisibility',
            'namespace' => 'getNamespace',
            'repoType' => 'getRepoType'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameWithNamespace'] = isset($data['nameWithNamespace']) ? $data['nameWithNamespace'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['pathWithNamespace'] = isset($data['pathWithNamespace']) ? $data['pathWithNamespace'] : null;
        $this->container['developMode'] = isset($data['developMode']) ? $data['developMode'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['isKia'] = isset($data['isKia']) ? $data['isKia'] : null;
        $this->container['sshUrlToRepo'] = isset($data['sshUrlToRepo']) ? $data['sshUrlToRepo'] : null;
        $this->container['httpUrlToRepo'] = isset($data['httpUrlToRepo']) ? $data['httpUrlToRepo'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['readmeUrl'] = isset($data['readmeUrl']) ? $data['readmeUrl'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['memberMgntMode'] = isset($data['memberMgntMode']) ? $data['memberMgntMode'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
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
    *  项目id
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
    * @param int|null $id 项目id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  项目描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 项目描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  项目名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 项目名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameWithNamespace
    *  项目名称
    *
    * @return string|null
    */
    public function getNameWithNamespace()
    {
        return $this->container['nameWithNamespace'];
    }

    /**
    * Sets nameWithNamespace
    *
    * @param string|null $nameWithNamespace 项目名称
    *
    * @return $this
    */
    public function setNameWithNamespace($nameWithNamespace)
    {
        $this->container['nameWithNamespace'] = $nameWithNamespace;
        return $this;
    }

    /**
    * Gets path
    *  项目路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 项目路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets pathWithNamespace
    *  项目路径
    *
    * @return string|null
    */
    public function getPathWithNamespace()
    {
        return $this->container['pathWithNamespace'];
    }

    /**
    * Sets pathWithNamespace
    *
    * @param string|null $pathWithNamespace 项目路径
    *
    * @return $this
    */
    public function setPathWithNamespace($pathWithNamespace)
    {
        $this->container['pathWithNamespace'] = $pathWithNamespace;
        return $this;
    }

    /**
    * Gets developMode
    *  开发模式
    *
    * @return string|null
    */
    public function getDevelopMode()
    {
        return $this->container['developMode'];
    }

    /**
    * Sets developMode
    *
    * @param string|null $developMode 开发模式
    *
    * @return $this
    */
    public function setDevelopMode($developMode)
    {
        $this->container['developMode'] = $developMode;
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
    * Gets archived
    *  是否归档
    *
    * @return bool|null
    */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
    * Sets archived
    *
    * @param bool|null $archived 是否归档
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
        return $this;
    }

    /**
    * Gets isKia
    *  是否为kia仓
    *
    * @return bool|null
    */
    public function getIsKia()
    {
        return $this->container['isKia'];
    }

    /**
    * Sets isKia
    *
    * @param bool|null $isKia 是否为kia仓
    *
    * @return $this
    */
    public function setIsKia($isKia)
    {
        $this->container['isKia'] = $isKia;
        return $this;
    }

    /**
    * Gets sshUrlToRepo
    *  项目url
    *
    * @return string|null
    */
    public function getSshUrlToRepo()
    {
        return $this->container['sshUrlToRepo'];
    }

    /**
    * Sets sshUrlToRepo
    *
    * @param string|null $sshUrlToRepo 项目url
    *
    * @return $this
    */
    public function setSshUrlToRepo($sshUrlToRepo)
    {
        $this->container['sshUrlToRepo'] = $sshUrlToRepo;
        return $this;
    }

    /**
    * Gets httpUrlToRepo
    *  项目url
    *
    * @return string|null
    */
    public function getHttpUrlToRepo()
    {
        return $this->container['httpUrlToRepo'];
    }

    /**
    * Sets httpUrlToRepo
    *
    * @param string|null $httpUrlToRepo 项目url
    *
    * @return $this
    */
    public function setHttpUrlToRepo($httpUrlToRepo)
    {
        $this->container['httpUrlToRepo'] = $httpUrlToRepo;
        return $this;
    }

    /**
    * Gets webUrl
    *  项目url
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl 项目url
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets readmeUrl
    *  项目readme url
    *
    * @return string|null
    */
    public function getReadmeUrl()
    {
        return $this->container['readmeUrl'];
    }

    /**
    * Sets readmeUrl
    *
    * @param string|null $readmeUrl 项目readme url
    *
    * @return $this
    */
    public function setReadmeUrl($readmeUrl)
    {
        $this->container['readmeUrl'] = $readmeUrl;
        return $this;
    }

    /**
    * Gets productId
    *  product id
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId product id
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productName
    *  product name
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName product name
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets memberMgntMode
    *  member mgnt mode
    *
    * @return int|null
    */
    public function getMemberMgntMode()
    {
        return $this->container['memberMgntMode'];
    }

    /**
    * Sets memberMgntMode
    *
    * @param int|null $memberMgntMode member mgnt mode
    *
    * @return $this
    */
    public function setMemberMgntMode($memberMgntMode)
    {
        $this->container['memberMgntMode'] = $memberMgntMode;
        return $this;
    }

    /**
    * Gets visibility
    *  visibility
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility visibility
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets namespace
    *  namespace
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\NamespaceBasicDto|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\NamespaceBasicDto|null $namespace namespace
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets repoType
    *  项目类型
    *
    * @return string|null
    */
    public function getRepoType()
    {
        return $this->container['repoType'];
    }

    /**
    * Sets repoType
    *
    * @param string|null $repoType 项目类型
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
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

