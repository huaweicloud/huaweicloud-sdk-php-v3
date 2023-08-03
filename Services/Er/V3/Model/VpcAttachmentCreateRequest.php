<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcAttachmentCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcAttachmentCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  VPC的id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    * name  VPC连接名字，取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * virsubnetId  VPC子网id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    * description  描述信息，取值范围：0-255个字符，不能包含“<”和“>”
    * autoCreateVpcRoutes  默认为false，为true表示自动为vpc配置指向企业路由器的路由
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => 'string',
            'name' => 'string',
            'virsubnetId' => 'string',
            'description' => 'string',
            'autoCreateVpcRoutes' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Er\V3\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  VPC的id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    * name  VPC连接名字，取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * virsubnetId  VPC子网id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    * description  描述信息，取值范围：0-255个字符，不能包含“<”和“>”
    * autoCreateVpcRoutes  默认为false，为true表示自动为vpc配置指向企业路由器的路由
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null,
        'name' => null,
        'virsubnetId' => null,
        'description' => null,
        'autoCreateVpcRoutes' => null,
        'tags' => null
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
    * vpcId  VPC的id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    * name  VPC连接名字，取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * virsubnetId  VPC子网id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    * description  描述信息，取值范围：0-255个字符，不能包含“<”和“>”
    * autoCreateVpcRoutes  默认为false，为true表示自动为vpc配置指向企业路由器的路由
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpc_id',
            'name' => 'name',
            'virsubnetId' => 'virsubnet_id',
            'description' => 'description',
            'autoCreateVpcRoutes' => 'auto_create_vpc_routes',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  VPC的id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    * name  VPC连接名字，取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * virsubnetId  VPC子网id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    * description  描述信息，取值范围：0-255个字符，不能包含“<”和“>”
    * autoCreateVpcRoutes  默认为false，为true表示自动为vpc配置指向企业路由器的路由
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId',
            'name' => 'setName',
            'virsubnetId' => 'setVirsubnetId',
            'description' => 'setDescription',
            'autoCreateVpcRoutes' => 'setAutoCreateVpcRoutes',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  VPC的id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    * name  VPC连接名字，取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * virsubnetId  VPC子网id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    * description  描述信息，取值范围：0-255个字符，不能包含“<”和“>”
    * autoCreateVpcRoutes  默认为false，为true表示自动为vpc配置指向企业路由器的路由
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId',
            'name' => 'getName',
            'virsubnetId' => 'getVirsubnetId',
            'description' => 'getDescription',
            'autoCreateVpcRoutes' => 'getAutoCreateVpcRoutes',
            'tags' => 'getTags'
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['autoCreateVpcRoutes'] = isset($data['autoCreateVpcRoutes']) ? $data['autoCreateVpcRoutes'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[一-龥a-zA-Z0-9-_.]*/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥a-zA-Z0-9-_.]*/.";
            }
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['virsubnetId'])) {
                $invalidProperties[] = "invalid value for 'virsubnetId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[^<>]*/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[^<>]*/.";
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
    * Gets vpcId
    *  VPC的id，取值范围：最大长度36字节，带“-”连字符的UUID格式
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
    * @param string $vpcId VPC的id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets name
    *  VPC连接名字，取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name VPC连接名字，取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  VPC子网id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    *
    * @return string
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string $virsubnetId VPC子网id，取值范围：最大长度36字节，带“-”连字符的UUID格式
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets description
    *  描述信息，取值范围：0-255个字符，不能包含“<”和“>”
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
    * @param string|null $description 描述信息，取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets autoCreateVpcRoutes
    *  默认为false，为true表示自动为vpc配置指向企业路由器的路由
    *
    * @return bool|null
    */
    public function getAutoCreateVpcRoutes()
    {
        return $this->container['autoCreateVpcRoutes'];
    }

    /**
    * Sets autoCreateVpcRoutes
    *
    * @param bool|null $autoCreateVpcRoutes 默认为false，为true表示自动为vpc配置指向企业路由器的路由
    *
    * @return $this
    */
    public function setAutoCreateVpcRoutes($autoCreateVpcRoutes)
    {
        $this->container['autoCreateVpcRoutes'] = $autoCreateVpcRoutes;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息
    *
    * @return \HuaweiCloud\SDK\Er\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Er\V3\Model\Tag[]|null $tags 标签信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

