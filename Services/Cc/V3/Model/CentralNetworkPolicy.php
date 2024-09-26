<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CentralNetworkPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CentralNetworkPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * domainId  实例所属账号ID。
    * state  state
    * centralNetworkId  中心网络ID。
    * documentTemplateVersion  documentTemplateVersion
    * isApplied  是否被应用。
    * version  中心网络策略的版本。
    * document  document
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'createdAt' => '\DateTime',
            'domainId' => 'string',
            'state' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkPolicyStateEnum',
            'centralNetworkId' => 'string',
            'documentTemplateVersion' => '\HuaweiCloud\SDK\Cc\V3\Model\DocumentTemplateVersionEnum',
            'isApplied' => 'bool',
            'version' => 'int',
            'document' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkPolicyDocument'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * domainId  实例所属账号ID。
    * state  state
    * centralNetworkId  中心网络ID。
    * documentTemplateVersion  documentTemplateVersion
    * isApplied  是否被应用。
    * version  中心网络策略的版本。
    * document  document
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'createdAt' => 'date-time',
        'domainId' => null,
        'state' => null,
        'centralNetworkId' => null,
        'documentTemplateVersion' => null,
        'isApplied' => null,
        'version' => 'int32',
        'document' => null
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
    * id  实例ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * domainId  实例所属账号ID。
    * state  state
    * centralNetworkId  中心网络ID。
    * documentTemplateVersion  documentTemplateVersion
    * isApplied  是否被应用。
    * version  中心网络策略的版本。
    * document  document
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'createdAt' => 'created_at',
            'domainId' => 'domain_id',
            'state' => 'state',
            'centralNetworkId' => 'central_network_id',
            'documentTemplateVersion' => 'document_template_version',
            'isApplied' => 'is_applied',
            'version' => 'version',
            'document' => 'document'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * domainId  实例所属账号ID。
    * state  state
    * centralNetworkId  中心网络ID。
    * documentTemplateVersion  documentTemplateVersion
    * isApplied  是否被应用。
    * version  中心网络策略的版本。
    * document  document
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'createdAt' => 'setCreatedAt',
            'domainId' => 'setDomainId',
            'state' => 'setState',
            'centralNetworkId' => 'setCentralNetworkId',
            'documentTemplateVersion' => 'setDocumentTemplateVersion',
            'isApplied' => 'setIsApplied',
            'version' => 'setVersion',
            'document' => 'setDocument'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * domainId  实例所属账号ID。
    * state  state
    * centralNetworkId  中心网络ID。
    * documentTemplateVersion  documentTemplateVersion
    * isApplied  是否被应用。
    * version  中心网络策略的版本。
    * document  document
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'createdAt' => 'getCreatedAt',
            'domainId' => 'getDomainId',
            'state' => 'getState',
            'centralNetworkId' => 'getCentralNetworkId',
            'documentTemplateVersion' => 'getDocumentTemplateVersion',
            'isApplied' => 'getIsApplied',
            'version' => 'getVersion',
            'document' => 'getDocument'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['centralNetworkId'] = isset($data['centralNetworkId']) ? $data['centralNetworkId'] : null;
        $this->container['documentTemplateVersion'] = isset($data['documentTemplateVersion']) ? $data['documentTemplateVersion'] : null;
        $this->container['isApplied'] = isset($data['isApplied']) ? $data['isApplied'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['document'] = isset($data['document']) ? $data['document'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!preg_match("/[a-fA-F0-9]{10,32}/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /[a-fA-F0-9]{10,32}/.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['centralNetworkId'] === null) {
            $invalidProperties[] = "'centralNetworkId' can't be null";
        }
            if ((mb_strlen($this->container['centralNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['centralNetworkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['centralNetworkId'])) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['documentTemplateVersion'] === null) {
            $invalidProperties[] = "'documentTemplateVersion' can't be null";
        }
        if ($this->container['isApplied'] === null) {
            $invalidProperties[] = "'isApplied' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if (($this->container['version'] > 4096)) {
                $invalidProperties[] = "invalid value for 'version', must be smaller than or equal to 4096.";
            }
            if (($this->container['version'] < 1)) {
                $invalidProperties[] = "invalid value for 'version', must be bigger than or equal to 1.";
            }
        if ($this->container['document'] === null) {
            $invalidProperties[] = "'document' can't be null";
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
    *  实例ID。
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
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createdAt
    *  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets domainId
    *  实例所属账号ID。
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
    * @param string $domainId 实例所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets state
    *  state
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkPolicyStateEnum
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkPolicyStateEnum $state state
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets centralNetworkId
    *  中心网络ID。
    *
    * @return string
    */
    public function getCentralNetworkId()
    {
        return $this->container['centralNetworkId'];
    }

    /**
    * Sets centralNetworkId
    *
    * @param string $centralNetworkId 中心网络ID。
    *
    * @return $this
    */
    public function setCentralNetworkId($centralNetworkId)
    {
        $this->container['centralNetworkId'] = $centralNetworkId;
        return $this;
    }

    /**
    * Gets documentTemplateVersion
    *  documentTemplateVersion
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\DocumentTemplateVersionEnum
    */
    public function getDocumentTemplateVersion()
    {
        return $this->container['documentTemplateVersion'];
    }

    /**
    * Sets documentTemplateVersion
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\DocumentTemplateVersionEnum $documentTemplateVersion documentTemplateVersion
    *
    * @return $this
    */
    public function setDocumentTemplateVersion($documentTemplateVersion)
    {
        $this->container['documentTemplateVersion'] = $documentTemplateVersion;
        return $this;
    }

    /**
    * Gets isApplied
    *  是否被应用。
    *
    * @return bool
    */
    public function getIsApplied()
    {
        return $this->container['isApplied'];
    }

    /**
    * Sets isApplied
    *
    * @param bool $isApplied 是否被应用。
    *
    * @return $this
    */
    public function setIsApplied($isApplied)
    {
        $this->container['isApplied'] = $isApplied;
        return $this;
    }

    /**
    * Gets version
    *  中心网络策略的版本。
    *
    * @return int
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int $version 中心网络策略的版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets document
    *  document
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkPolicyDocument
    */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
    * Sets document
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkPolicyDocument $document document
    *
    * @return $this
    */
    public function setDocument($document)
    {
        $this->container['document'] = $document;
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

