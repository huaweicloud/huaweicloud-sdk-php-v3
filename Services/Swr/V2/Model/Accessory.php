<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Accessory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Accessory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  附件ID
    * artifactId  附件制品ID
    * subjectArtifactId  附件所属的父制品ID.
    * size  附件的大小
    * digest  附件的sha256值
    * type  附件的类型
    * createdAt  附件的创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'artifactId' => 'int',
            'subjectArtifactId' => 'int',
            'size' => 'int',
            'digest' => 'string',
            'type' => 'string',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  附件ID
    * artifactId  附件制品ID
    * subjectArtifactId  附件所属的父制品ID.
    * size  附件的大小
    * digest  附件的sha256值
    * type  附件的类型
    * createdAt  附件的创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'artifactId' => 'int64',
        'subjectArtifactId' => 'int64',
        'size' => 'int64',
        'digest' => null,
        'type' => null,
        'createdAt' => null
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
    * id  附件ID
    * artifactId  附件制品ID
    * subjectArtifactId  附件所属的父制品ID.
    * size  附件的大小
    * digest  附件的sha256值
    * type  附件的类型
    * createdAt  附件的创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'artifactId' => 'artifact_id',
            'subjectArtifactId' => 'subject_artifact_id',
            'size' => 'size',
            'digest' => 'digest',
            'type' => 'type',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  附件ID
    * artifactId  附件制品ID
    * subjectArtifactId  附件所属的父制品ID.
    * size  附件的大小
    * digest  附件的sha256值
    * type  附件的类型
    * createdAt  附件的创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'artifactId' => 'setArtifactId',
            'subjectArtifactId' => 'setSubjectArtifactId',
            'size' => 'setSize',
            'digest' => 'setDigest',
            'type' => 'setType',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  附件ID
    * artifactId  附件制品ID
    * subjectArtifactId  附件所属的父制品ID.
    * size  附件的大小
    * digest  附件的sha256值
    * type  附件的类型
    * createdAt  附件的创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'artifactId' => 'getArtifactId',
            'subjectArtifactId' => 'getSubjectArtifactId',
            'size' => 'getSize',
            'digest' => 'getDigest',
            'type' => 'getType',
            'createdAt' => 'getCreatedAt'
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
    const TYPE_SIGNATURE_COSIGN = 'signature.cosign';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SIGNATURE_COSIGN,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['artifactId'] = isset($data['artifactId']) ? $data['artifactId'] : null;
        $this->container['subjectArtifactId'] = isset($data['subjectArtifactId']) ? $data['subjectArtifactId'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  附件ID
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
    * @param int|null $id 附件ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets artifactId
    *  附件制品ID
    *
    * @return int|null
    */
    public function getArtifactId()
    {
        return $this->container['artifactId'];
    }

    /**
    * Sets artifactId
    *
    * @param int|null $artifactId 附件制品ID
    *
    * @return $this
    */
    public function setArtifactId($artifactId)
    {
        $this->container['artifactId'] = $artifactId;
        return $this;
    }

    /**
    * Gets subjectArtifactId
    *  附件所属的父制品ID.
    *
    * @return int|null
    */
    public function getSubjectArtifactId()
    {
        return $this->container['subjectArtifactId'];
    }

    /**
    * Sets subjectArtifactId
    *
    * @param int|null $subjectArtifactId 附件所属的父制品ID.
    *
    * @return $this
    */
    public function setSubjectArtifactId($subjectArtifactId)
    {
        $this->container['subjectArtifactId'] = $subjectArtifactId;
        return $this;
    }

    /**
    * Gets size
    *  附件的大小
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
    * @param int|null $size 附件的大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets digest
    *  附件的sha256值
    *
    * @return string|null
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string|null $digest 附件的sha256值
    *
    * @return $this
    */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;
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
    *  附件的创建时间
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
    * @param string|null $createdAt 附件的创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

