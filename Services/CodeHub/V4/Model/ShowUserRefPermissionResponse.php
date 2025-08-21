<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUserRefPermissionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUserRefPermissionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * read  read
    * review  review
    * approval  approval
    * createChange  createChange
    * merge  merge
    * createDelete  createDelete
    * push  push
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'read' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto',
            'review' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto',
            'approval' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto',
            'createChange' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto',
            'merge' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto',
            'createDelete' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto',
            'push' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * read  read
    * review  review
    * approval  approval
    * createChange  createChange
    * merge  merge
    * createDelete  createDelete
    * push  push
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'read' => null,
        'review' => null,
        'approval' => null,
        'createChange' => null,
        'merge' => null,
        'createDelete' => null,
        'push' => null
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
    * read  read
    * review  review
    * approval  approval
    * createChange  createChange
    * merge  merge
    * createDelete  createDelete
    * push  push
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'read' => 'read',
            'review' => 'review',
            'approval' => 'approval',
            'createChange' => 'create_change',
            'merge' => 'merge',
            'createDelete' => 'create_delete',
            'push' => 'push'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * read  read
    * review  review
    * approval  approval
    * createChange  createChange
    * merge  merge
    * createDelete  createDelete
    * push  push
    *
    * @var string[]
    */
    protected static $setters = [
            'read' => 'setRead',
            'review' => 'setReview',
            'approval' => 'setApproval',
            'createChange' => 'setCreateChange',
            'merge' => 'setMerge',
            'createDelete' => 'setCreateDelete',
            'push' => 'setPush'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * read  read
    * review  review
    * approval  approval
    * createChange  createChange
    * merge  merge
    * createDelete  createDelete
    * push  push
    *
    * @var string[]
    */
    protected static $getters = [
            'read' => 'getRead',
            'review' => 'getReview',
            'approval' => 'getApproval',
            'createChange' => 'getCreateChange',
            'merge' => 'getMerge',
            'createDelete' => 'getCreateDelete',
            'push' => 'getPush'
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
        $this->container['read'] = isset($data['read']) ? $data['read'] : null;
        $this->container['review'] = isset($data['review']) ? $data['review'] : null;
        $this->container['approval'] = isset($data['approval']) ? $data['approval'] : null;
        $this->container['createChange'] = isset($data['createChange']) ? $data['createChange'] : null;
        $this->container['merge'] = isset($data['merge']) ? $data['merge'] : null;
        $this->container['createDelete'] = isset($data['createDelete']) ? $data['createDelete'] : null;
        $this->container['push'] = isset($data['push']) ? $data['push'] : null;
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
    * Gets read
    *  read
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null
    */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
    * Sets read
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null $read read
    *
    * @return $this
    */
    public function setRead($read)
    {
        $this->container['read'] = $read;
        return $this;
    }

    /**
    * Gets review
    *  review
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null
    */
    public function getReview()
    {
        return $this->container['review'];
    }

    /**
    * Sets review
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null $review review
    *
    * @return $this
    */
    public function setReview($review)
    {
        $this->container['review'] = $review;
        return $this;
    }

    /**
    * Gets approval
    *  approval
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null
    */
    public function getApproval()
    {
        return $this->container['approval'];
    }

    /**
    * Sets approval
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null $approval approval
    *
    * @return $this
    */
    public function setApproval($approval)
    {
        $this->container['approval'] = $approval;
        return $this;
    }

    /**
    * Gets createChange
    *  createChange
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null
    */
    public function getCreateChange()
    {
        return $this->container['createChange'];
    }

    /**
    * Sets createChange
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null $createChange createChange
    *
    * @return $this
    */
    public function setCreateChange($createChange)
    {
        $this->container['createChange'] = $createChange;
        return $this;
    }

    /**
    * Gets merge
    *  merge
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null
    */
    public function getMerge()
    {
        return $this->container['merge'];
    }

    /**
    * Sets merge
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null $merge merge
    *
    * @return $this
    */
    public function setMerge($merge)
    {
        $this->container['merge'] = $merge;
        return $this;
    }

    /**
    * Gets createDelete
    *  createDelete
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null
    */
    public function getCreateDelete()
    {
        return $this->container['createDelete'];
    }

    /**
    * Sets createDelete
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null $createDelete createDelete
    *
    * @return $this
    */
    public function setCreateDelete($createDelete)
    {
        $this->container['createDelete'] = $createDelete;
        return $this;
    }

    /**
    * Gets push
    *  push
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null
    */
    public function getPush()
    {
        return $this->container['push'];
    }

    /**
    * Sets push
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserRefPermissionBasicDto|null $push push
    *
    * @return $this
    */
    public function setPush($push)
    {
        $this->container['push'] = $push;
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

