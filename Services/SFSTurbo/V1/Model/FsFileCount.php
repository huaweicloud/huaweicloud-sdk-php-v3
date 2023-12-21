<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FsFileCount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FsFileCount';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dir  目录数目
    * regular  普通文件数目
    * pipe  管道文件数目
    * char  字符设备数目
    * block  块设备数目
    * socket  套接字数目
    * symlink  符号链接数目
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dir' => 'int',
            'regular' => 'int',
            'pipe' => 'int',
            'char' => 'int',
            'block' => 'int',
            'socket' => 'int',
            'symlink' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dir  目录数目
    * regular  普通文件数目
    * pipe  管道文件数目
    * char  字符设备数目
    * block  块设备数目
    * socket  套接字数目
    * symlink  符号链接数目
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dir' => 'int64',
        'regular' => 'int64',
        'pipe' => 'int64',
        'char' => 'int64',
        'block' => 'int64',
        'socket' => 'int64',
        'symlink' => 'int64'
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
    * dir  目录数目
    * regular  普通文件数目
    * pipe  管道文件数目
    * char  字符设备数目
    * block  块设备数目
    * socket  套接字数目
    * symlink  符号链接数目
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dir' => 'dir',
            'regular' => 'regular',
            'pipe' => 'pipe',
            'char' => 'char',
            'block' => 'block',
            'socket' => 'socket',
            'symlink' => 'symlink'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dir  目录数目
    * regular  普通文件数目
    * pipe  管道文件数目
    * char  字符设备数目
    * block  块设备数目
    * socket  套接字数目
    * symlink  符号链接数目
    *
    * @var string[]
    */
    protected static $setters = [
            'dir' => 'setDir',
            'regular' => 'setRegular',
            'pipe' => 'setPipe',
            'char' => 'setChar',
            'block' => 'setBlock',
            'socket' => 'setSocket',
            'symlink' => 'setSymlink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dir  目录数目
    * regular  普通文件数目
    * pipe  管道文件数目
    * char  字符设备数目
    * block  块设备数目
    * socket  套接字数目
    * symlink  符号链接数目
    *
    * @var string[]
    */
    protected static $getters = [
            'dir' => 'getDir',
            'regular' => 'getRegular',
            'pipe' => 'getPipe',
            'char' => 'getChar',
            'block' => 'getBlock',
            'socket' => 'getSocket',
            'symlink' => 'getSymlink'
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
        $this->container['dir'] = isset($data['dir']) ? $data['dir'] : null;
        $this->container['regular'] = isset($data['regular']) ? $data['regular'] : null;
        $this->container['pipe'] = isset($data['pipe']) ? $data['pipe'] : null;
        $this->container['char'] = isset($data['char']) ? $data['char'] : null;
        $this->container['block'] = isset($data['block']) ? $data['block'] : null;
        $this->container['socket'] = isset($data['socket']) ? $data['socket'] : null;
        $this->container['symlink'] = isset($data['symlink']) ? $data['symlink'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dir']) && ($this->container['dir'] < 0)) {
                $invalidProperties[] = "invalid value for 'dir', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regular']) && ($this->container['regular'] < 0)) {
                $invalidProperties[] = "invalid value for 'regular', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pipe']) && ($this->container['pipe'] < 0)) {
                $invalidProperties[] = "invalid value for 'pipe', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['char']) && ($this->container['char'] < 0)) {
                $invalidProperties[] = "invalid value for 'char', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['block']) && ($this->container['block'] < 0)) {
                $invalidProperties[] = "invalid value for 'block', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['socket']) && ($this->container['socket'] < 0)) {
                $invalidProperties[] = "invalid value for 'socket', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['symlink']) && ($this->container['symlink'] < 0)) {
                $invalidProperties[] = "invalid value for 'symlink', must be bigger than or equal to 0.";
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
    * Gets dir
    *  目录数目
    *
    * @return int|null
    */
    public function getDir()
    {
        return $this->container['dir'];
    }

    /**
    * Sets dir
    *
    * @param int|null $dir 目录数目
    *
    * @return $this
    */
    public function setDir($dir)
    {
        $this->container['dir'] = $dir;
        return $this;
    }

    /**
    * Gets regular
    *  普通文件数目
    *
    * @return int|null
    */
    public function getRegular()
    {
        return $this->container['regular'];
    }

    /**
    * Sets regular
    *
    * @param int|null $regular 普通文件数目
    *
    * @return $this
    */
    public function setRegular($regular)
    {
        $this->container['regular'] = $regular;
        return $this;
    }

    /**
    * Gets pipe
    *  管道文件数目
    *
    * @return int|null
    */
    public function getPipe()
    {
        return $this->container['pipe'];
    }

    /**
    * Sets pipe
    *
    * @param int|null $pipe 管道文件数目
    *
    * @return $this
    */
    public function setPipe($pipe)
    {
        $this->container['pipe'] = $pipe;
        return $this;
    }

    /**
    * Gets char
    *  字符设备数目
    *
    * @return int|null
    */
    public function getChar()
    {
        return $this->container['char'];
    }

    /**
    * Sets char
    *
    * @param int|null $char 字符设备数目
    *
    * @return $this
    */
    public function setChar($char)
    {
        $this->container['char'] = $char;
        return $this;
    }

    /**
    * Gets block
    *  块设备数目
    *
    * @return int|null
    */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
    * Sets block
    *
    * @param int|null $block 块设备数目
    *
    * @return $this
    */
    public function setBlock($block)
    {
        $this->container['block'] = $block;
        return $this;
    }

    /**
    * Gets socket
    *  套接字数目
    *
    * @return int|null
    */
    public function getSocket()
    {
        return $this->container['socket'];
    }

    /**
    * Sets socket
    *
    * @param int|null $socket 套接字数目
    *
    * @return $this
    */
    public function setSocket($socket)
    {
        $this->container['socket'] = $socket;
        return $this;
    }

    /**
    * Gets symlink
    *  符号链接数目
    *
    * @return int|null
    */
    public function getSymlink()
    {
        return $this->container['symlink'];
    }

    /**
    * Sets symlink
    *
    * @param int|null $symlink 符号链接数目
    *
    * @return $this
    */
    public function setSymlink($symlink)
    {
        $this->container['symlink'] = $symlink;
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

